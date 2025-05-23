<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    // Mostrar todas las respuestas
    public function index()
    {
        $respuestas = Respuesta::all();
        return response()->json($respuestas);
    }

    // Crear nueva respuesta
    public function store(Request $request)
    {
        $request->validate([
            'encuestado_id' => 'required|exists:encuestados,id',
            'pregunta_id' => 'required|exists:preguntas,id',
            'respuesta' => 'required|string',
        ]);

        $respuesta = Respuesta::create($request->all());

        return response()->json($respuesta, 201);
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
    