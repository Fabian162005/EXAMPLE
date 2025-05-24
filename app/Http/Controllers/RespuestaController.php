<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Encuestado;
use App\Models\IpBlock;
use App\Models\IpVoto;
use Illuminate\Support\Facades\Validator;
class RespuestaController extends Controller
{
    // Mostrar todas las respuestas
    public function index()
    {
        $respuestas = Respuesta::all();
        return response()->json($respuestas);
    }

public function respuestasConEncuesta()
{
    $respuestas = DB::table('respuestas')
        ->join('preguntas', 'respuestas.pregunta_id', '=', 'preguntas.id')
        ->join('encuestas', 'preguntas.encuesta_id', '=', 'encuestas.id')
        ->select(
            'encuestas.nombre as encuesta',
            'preguntas.texto as pregunta',
            'respuestas.respuesta'
        )
        ->get();

    return response()->json($respuestas);
}

    // Guardar respuestas y controlar IPs
    public function store(Request $request)
    {
        $ipCliente = $request->ip();

        // 1. Verificar IP bloqueada
        if (IpBlock::where('ip', $ipCliente)->exists()) {
            return response()->json([
                'error' => 'Su IP está bloqueada y no puede enviar respuestas.'
            ], 403);
        }

        // 2. Verificar si ya votó
        if (IpVoto::where('ip', $ipCliente)->exists()) {
            return response()->json([
                'error' => 'Ya ha enviado respuestas desde esta IP.'
            ], 403);
        }

        // 3. Validar datos del request
        $validator = Validator::make($request->all(), [
            'encuesta_id' => 'required|integer|exists:encuestas,id',
            'genero' => 'required|string',
            'edad' => 'required|integer|min:18|max:100',
            'respuestas' => 'required|array|min:1',
            'respuestas.*.pregunta_id' => 'required|integer|exists:preguntas,id',
            'respuestas.*.respuesta' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        DB::beginTransaction();

        try {
            // 4. Crear encuestado
            $encuestado = Encuestado::create([
                'genero' => $request->genero,
                'edad' => $request->edad,
                'encuesta_id' => $request->encuesta_id,
                'ip' => $ipCliente,
            ]);

            // 5. Guardar respuestas
            foreach ($request->respuestas as $resp) {
                Respuesta::create([
                    'encuestado_id' => $encuestado->id,
                    'pregunta_id' => $resp['pregunta_id'],
                    'respuesta' => is_array($resp['respuesta'])
                        ? json_encode($resp['respuesta'])
                        : $resp['respuesta'],
                ]);
            }

            // 6. Guardar IP en IpVoto para bloquear futuros votos
            IpVoto::create([
                'ip' => $ipCliente,
                'encuesta_id' => $request->encuesta_id,
            ]);

            DB::commit();

            return response()->json(['message' => 'Respuestas guardadas correctamente']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error al guardar respuestas',
                'details' => $e->getMessage()
            ], 500);
        }
    }
    // Mostrar respuesta específica
    public function show($id)
    {
        $respuesta = Respuesta::findOrFail($id);
        return response()->json($respuesta);
    }

    // Actualizar respuesta
    public function update(Request $request, $id)
    {
        $respuesta = Respuesta::findOrFail($id);

        $request->validate([
            'encuestado_id' => 'sometimes|exists:encuestados,id',
            'pregunta_id' => 'sometimes|exists:preguntas,id',
            'respuesta' => 'sometimes|string',
        ]);

        $respuesta->update($request->all());

        return response()->json($respuesta);
    }

    // Eliminar respuesta
    public function destroy($id)
    {
        $respuesta = Respuesta::findOrFail($id);
        $respuesta->delete();

        return response()->json(null, 204);
    }
}
    