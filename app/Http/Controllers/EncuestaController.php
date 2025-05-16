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

    // Buscar o crear encuesta por nombre
    $encuesta = Encuesta::firstOrCreate([
        'nombre' => $request->input('nombre')
    ]);

    // ✅ Obtener el último grupo_id y sumarle 1 (o empezar desde 1 si no hay ninguno)
    $ultimoGrupo = DB::table('respuestas')->max('grupo_id');
    $grupoId = $ultimoGrupo ? $ultimoGrupo + 1 : 1;

    // Guardar todas las respuestas con el mismo grupo_id
    foreach ($respuestas as $pregunta => $respuesta) {
        if (is_array($respuesta)) {
            $respuesta = implode(', ', $respuesta);
        }

        Respuesta::create([
            'encuesta_id' => $encuesta->id,
            'grupo_id'    => $grupoId, // número incremental
            'pregunta'    => ucfirst(str_replace('_', ' ', $pregunta)),
            'respuesta'   => $respuesta,
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Encuesta guardada correctamente']);
}
}
