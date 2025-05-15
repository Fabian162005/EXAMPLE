<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function store(Request $request)
{
    // Decodificar JSON en array
    $respuestas = json_decode($request->input('respuestas'), true);

    if (!is_array($respuestas)) {
        return response()->json(['success' => false, 'message' => 'Formato de respuestas inválido'], 422);
    }

    // Validar manualmente o usar un validador dinámico
    // Aquí para simplificar no uso validación Laravel, pero puedes hacerla con Validator

    // Crear encuesta
    $encuesta = Encuesta::create([
        'nombre' => $request->input('nombre'),
    ]);

    // Guardar respuestas
    foreach ($respuestas as $respuesta) {
        Respuesta::create([
            'encuesta_id' => $encuesta->id,
            'pregunta' => $respuesta['pregunta'] ?? '',
            'respuesta' => $respuesta['respuesta'] ?? null,
        ]);
    }

    // Responder con JSON
    return response()->json([
        'success' => true,
        'resultados' => [],
    ]);
}

}
