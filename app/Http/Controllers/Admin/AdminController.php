<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function dashboard()
{
    // ...

    $noticias = Noticia::orderBy('created_at', 'desc')->paginate(10);

    $provincialesCategoria = Categoria::where('nombre', 'Provinciales')->first();
    $distritalesCategoria = Categoria::where('nombre', 'Distritales')->first();

    $provinciales = $provincialesCategoria ? $provincialesCategoria->encuestas()->get() : collect();
    $distritales = $distritalesCategoria ? $distritalesCategoria->encuestas()->get() : collect();

    // Traer todas las categorías para el modal
    $categorias = Categoria::all();

    return view('admin.dashboard', compact('noticias', 'provinciales', 'distritales', 'categorias'));
}

}
