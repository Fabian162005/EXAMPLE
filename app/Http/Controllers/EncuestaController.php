<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Respuesta;
use App\Models\Encuestado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuestaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'sexo' => 'required|string|in:masculino,femenino,otro',
            'edad' => 'required|integer|min:0|max:120',
            'respuestas' => 'required|json',
        ]);

        $datosEncuesta = json_decode($request->input('respuestas'), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['success' => false, 'message' => 'JSON inválido en respuestas'], 422);
        }

        if (!isset($datosEncuesta['respuestas']) || !is_array($datosEncuesta['respuestas'])) {
            return response()->json(['success' => false, 'message' => 'Formato de respuestas inválido'], 422);
        }

        DB::transaction(function () use ($request, $datosEncuesta) {
            // Crear o buscar la encuesta
            $encuesta = Encuesta::firstOrCreate(
                ['nombre' => $request->input('nombre')]
            );

            if (!$encuesta || !$encuesta->id) {
                throw new \Exception('No se pudo crear o encontrar la encuesta');
            }

            // Crear encuestado relacionado
            $encuestado = Encuestado::create([
                'encuesta_id' => $encuesta->id,
                'genero' => $request->input('sexo'),
                'edad' => $request->input('edad'),
            ]);

            foreach ($datosEncuesta['respuestas'] as $item) {
                $preguntaTexto = $item['pregunta'] ?? null;
                $respuesta = $item['respuesta'] ?? null;

                if (is_array($respuesta)) {
                    $respuesta = implode(', ', $respuesta);
                }

                if (!is_null($respuesta) && $respuesta !== '' && $preguntaTexto) {
                    // Buscar o crear pregunta
                    $pregunta = DB::table('preguntas')
                        ->where('encuesta_id', $encuesta->id)
                        ->where('texto', $preguntaTexto)
                        ->first();

                    if (!$pregunta) {
                        $preguntaId = DB::table('preguntas')->insertGetId([
                            'encuesta_id' => $encuesta->id,
                            'texto' => $preguntaTexto,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    } else {
                        $preguntaId = $pregunta->id;
                    }

                    // Insertar respuesta
                    DB::table('respuestas')->insert([
                        'encuestado_id' => $encuestado->id,
                        'pregunta_id' => $preguntaId,
                        'respuesta' => $respuesta,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        });

        return response()->json(['success' => true, 'message' => 'Encuesta guardada correctamente']);
    }

    public function obtenerRespuestasConNombre()
    {
        // Suponiendo que Respuesta tiene relación con Pregunta, Encuestado y Encuesta
        $respuestas = Respuesta::with(['pregunta', 'encuestado.encuesta'])->get();

        $respuestasTransformadas = $respuestas->map(function ($respuesta) {
            return [
                'id' => $respuesta->id,
                'pregunta' => $respuesta->pregunta ? $respuesta->pregunta->texto : null,
                'respuesta' => $respuesta->respuesta,
                'encuesta_nombre' => $respuesta->encuestado && $respuesta->encuestado->encuesta 
                                    ? $respuesta->encuestado->encuesta->nombre 
                                    : null,
                'genero' => $respuesta->encuestado->genero ?? null,
                'edad' => $respuesta->encuestado->edad ?? null,
            ];
        });

        return response()->json($respuestasTransformadas);
    }
}
