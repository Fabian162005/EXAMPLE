<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Encuesta;

class EncuestaAdminController extends Controller
{
    // Método para mostrar listado agrupado de encuestas provinciales y distritales
public function listadoEncuestas()
{
    $provinciales = Encuesta::whereHas('categoria', function($query) {
        $query->where('nombre', 'Provinciales'); // ✅ Esto sí existe en tu BD
    })->get();

    $distritales = Encuesta::whereHas('categoria', function($query) {
        $query->where('nombre', 'Distritales'); // ✅ También correcto
    })->get();

    return view('admin.encuestas.listado', compact('provinciales', 'distritales'));
}


    // Método para mostrar encuesta individual
    public function verEncuesta($slug)
    {
        $nombreBuscado = str_replace('-', ' ', $slug);

        $encuesta = Encuesta::where('nombre', 'like', '%' . $nombreBuscado . '%')->first();

        if (!$encuesta) {
            abort(404, 'Encuesta no encontrada.');
        }

        return view('admin.encuestas.ver', compact('encuesta'));
    }
}
