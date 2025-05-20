<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Respuesta;

class EncuestaAdminController extends Controller
{
    public function verEncuesta($slug)
{
    // Convertir slug a nombre esperado reemplazando guiones por espacios
    $nombreBuscado = str_replace('-', ' ', $slug);

    // Buscar encuesta por nombre similar (LIKE)
    $encuesta = Encuesta::where('nombre', 'like', '%' . $nombreBuscado . '%')->first();

    if (!$encuesta) {
        abort(404, 'Encuesta no encontrada.');
    }

    return view('admin.encuestas.ver', compact('encuesta'));
}



}
