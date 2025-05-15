<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuestaController extends Controller
{
    public function store(Request $request)
    {
        $respuestas = json_decode($request->input('respuestas'), true);

        if (!is_array($respuestas)) {
            return response()->json(['success' => false, 'message' => 'Formato de respuestas inválido'], 422);
        }

        // Buscar encuesta por nombre (si no existe, la crea)
        $encuesta = Encuesta::firstOrCreate([
            'nombre' => $request->input('nombre')
        ]);

        // Unificar todas las respuestas como un solo texto
        $textoPreguntas = '';
        foreach ($respuestas as $clave => $valor) {
            if (in_array($clave, ['sexo', 'edad'])) continue;
            if (is_array($valor)) {
                $valor = implode(', ', $valor); // problemas[]
            }
            $textoPreguntas .= ucfirst($clave) . ': ' . $valor . "\n";
        }

        // Crear la respuesta única
        Respuesta::create([
            'encuesta_id' => $encuesta->id,
            'pregunta' => 'Respuestas completas',
            'respuesta' => $textoPreguntas,
        ]);

        return response()->json(['success' => true, 'resultados' => []]);
    }
}
