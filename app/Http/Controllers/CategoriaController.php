<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Devuelve todas las categorías en formato JSON
   public function index()
{
    $categorias = Categoria::with(['encuestas' => function($query) {
        $query->select('id', 'nombre', 'categoria_id');
    }])->get(['id', 'nombre']);

    return response()->json($categorias);
}

}
