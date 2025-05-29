<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Categoria;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Str;
use App\Models\Opcion;
use App\Models\ResultadoImagen; // importa el modelo


class EncuestaController extends Controller
{
    /**
     * Listar todas las encuestas simples
     */

     
    public function index()
    {
        $encuestas = Encuesta::all(['id', 'nombre', 'categoria_id']);
        return response()->json($encuestas);
    }

    /**
     * Listar encuestas agrupadas por categoría (usando relación)
     * Ejemplo útil para mostrar Provinciales y Distritales
     */
    public function indexAgrupadoPorCategoria()
    {
        $categorias = Categoria::with('encuestas')->get();
        return response()->json($categorias);
    }


    
public function verResultados()
{
    $imagenes = ResultadoImagen::all();

    return view('verResultados', compact('imagenes'));
}
public function verPublica($slug)
{
    $encuesta = Encuesta::where('slug', $slug)->with('preguntas.opciones')->firstOrFail();

    return view('encuestas.ver', compact('encuesta'));
}
    /**
     * Crear nueva encuesta
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'categoria_id' => 'required|exists:categorias,id',
    ]);

    $nombre = $request->input('nombre');

    // Verificamos si ya existe una encuesta con ese nombre
    if (Encuesta::where('nombre', $nombre)->exists()) {
        return response()->json([
            'message' => 'Ya existe una encuesta con ese nombre.'
        ], 422);
    }

    // Si no existe, crear encuesta
    $encuesta = Encuesta::create([
        'nombre' => $nombre,
        'slug' => Str::slug($nombre),
        'categoria_id' => $request->input('categoria_id'),
    ]);

    return response()->json([
        'message' => 'Encuesta creada correctamente',
        'encuesta' => $encuesta,
    ], 201);
}


    /**
     * Actualizar encuesta existente
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $encuesta = Encuesta::find($id);

        if (!$encuesta) {
            return response()->json(['message' => 'Encuesta no encontrada'], 404);
        }

        $encuesta->update([
            'nombre' => $request->nombre,
            'categoria_id' => $request->categoria_id,
        ]);

        return response()->json(['message' => 'Encuesta actualizada correctamente']);
    }

    /**
     * Eliminar encuesta
     */
    public function destroy($id)
    {
        $encuesta = Encuesta::find($id);

        if (!$encuesta) {
            return response()->json(['message' => 'Encuesta no encontrada'], 404);
        }

        $encuesta->delete();

        return response()->json(['message' => 'Encuesta eliminada correctamente']);
    }

    /**
     * Obtener respuestas con detalles de pregunta, encuesta y encuestado
     */
    public function obtenerRespuestasConNombre()
    {
        $respuestas = Respuesta::with(['pregunta', 'encuestado.encuesta.categoria'])->get();

        $respuestasTransformadas = $respuestas->map(function ($respuesta) {
            return [
                'id' => $respuesta->id,
                'pregunta' => $respuesta->pregunta ? $respuesta->pregunta->texto : null,
                'respuesta' => $respuesta->respuesta,
                'encuesta_nombre' => ($respuesta->encuestado && $respuesta->encuestado->encuesta)
                    ? $respuesta->encuestado->encuesta->nombre
                    : null,
                'categoria' => ($respuesta->encuestado && $respuesta->encuestado->encuesta && $respuesta->encuestado->encuesta->categoria)
                    ? $respuesta->encuestado->encuesta->categoria->nombre
                    : null,
                'genero' => $respuesta->encuestado ? $respuesta->encuestado->genero : null,
                'edad' => $respuesta->encuestado ? $respuesta->encuestado->edad : null,
            ];
        });

        return response()->json($respuestasTransformadas);
    }


public function verAdmin($slug)
{
    $encuesta = Encuesta::where('slug', $slug)->with('preguntas.opciones')->firstOrFail();

    return view('admin.encuestas.ver', compact('encuesta'));
} 
  public function actualizar(Request $request, $id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->nombre = $request->nombre;
        $encuesta->slug = $request->slug;
        $encuesta->save();

        // 1. Actualizar preguntas existentes
        if ($request->has('preguntas')) {
            foreach ($request->preguntas as $pid => $pData) {
                $pregunta = Pregunta::find($pid);
                if ($pregunta) {
                    $pregunta->texto = $pData['texto'];
                    $pregunta->save();
                }
            }
        }

        // 2. Actualizar opciones existentes
        if ($request->has('opciones')) {
            foreach ($request->opciones as $pid => $opciones) {
                foreach ($opciones as $oid => $texto) {
                    $opcion = Opcion::find($oid);
                    if ($opcion) {
                        $opcion->texto = $texto;
                        $opcion->save();
                    }
                }
            }
        }

        // 3. Agregar nuevas opciones a preguntas existentes
        if ($request->has('opciones_existentes')) {
            foreach ($request->opciones_existentes as $pid => $opcionesNuevas) {
                $pregunta = Pregunta::find($pid);
                if ($pregunta) {
                    foreach ($opcionesNuevas as $textoNuevaOpcion) {
                        $textoNuevaOpcion = trim($textoNuevaOpcion);
                        if ($textoNuevaOpcion !== '') {
                            $pregunta->opciones()->create(['texto' => $textoNuevaOpcion]);
                        }
                    }
                }
            }
        }

        // 4. Crear preguntas nuevas con sus opciones nuevas
        if ($request->has('preguntas_nuevas')) {
            foreach ($request->preguntas_nuevas as $idTemporal => $datosPreguntaNueva) {
                $preguntaNueva = Pregunta::create([
                    'encuesta_id' => $encuesta->id,
                    'texto' => $datosPreguntaNueva['texto'],
                    'tipo' => 'texto',
                ]);

                $opcionesParaPregunta = $request->input("opciones_nuevas.$idTemporal", []);

                foreach ($opcionesParaPregunta as $textoOpcion) {
                    $textoOpcion = trim($textoOpcion);
                    if ($textoOpcion !== '') {
                        $preguntaNueva->opciones()->create([
                            'texto' => $textoOpcion,
                        ]);
                    }
                }
            }
        }

        // Eliminar preguntas marcadas
        if ($request->has('preguntas_eliminar')) {
            Pregunta::whereIn('id', $request->preguntas_eliminar)->delete();
        }

        // Eliminar opciones marcadas
        if ($request->has('opciones_eliminar')) {
            Opcion::whereIn('id', $request->opciones_eliminar)->delete();
        }


        return redirect()->back()->with('success', 'Encuesta actualizada correctamente');
    }

}
