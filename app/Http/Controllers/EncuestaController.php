<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Categoria;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Str;


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


    
public function ver($slug)
{
    $encuesta = Encuesta::where('slug', $slug)->with('preguntas.opciones')->firstOrFail();
    return view('admin.encuestas.ver', compact('encuesta'));
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

        $encuesta = Encuesta::create([
            'nombre' => $request->nombre,
            'categoria_id' => $request->categoria_id,
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


public function verPorNombre($nombre)
{
    // Busca la encuesta por nombre o lanza error 404
    $encuesta = Encuesta::where('nombre', $nombre)->firstOrFail();

    // Obtiene las preguntas usando la relación
    $preguntas = $encuesta->preguntas;

    return view('admin.encuestas.ver', [
        'nombreEncuesta' => $encuesta->nombre,
        'preguntas' => $preguntas,
        'encuesta' => $encuesta,
    ]);
}

}
