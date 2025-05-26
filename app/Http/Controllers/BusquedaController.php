<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $categoria = $request->input('categoria');

        // Por ahora sin lógica de búsqueda real
        return view('busqueda.resultados', [
            'query' => $query,
            'categoria' => $categoria ?? 'General',
            'resultados' => [] // Vacío por ahora
        ]);
    }
    public function showSearch(Request $request)
{
    // Guardar la URL de app.blade.php como destino de regreso
    session(['return_to' => route('inicio')]);
    
    // Resto de tu lógica...
    return view('busqueda', compact('resultados', 'query'));
}
}