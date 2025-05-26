<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultadoImagen;
use Illuminate\Support\Facades\Storage;

class ResultadoImagenController extends Controller
{

    public function index()
    {
        $imagenes = ResultadoImagen::all();
        return view('admin.adminVerResultados', compact('imagenes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|max:2048', // max 2MB
            'titulo' => 'required|string|max:255',
        ]);

        // Guardar la imagen en storage/app/public/resultados
        $ruta = $request->file('imagen')->store('resultados', 'public');

        ResultadoImagen::create([
            'ruta' => $ruta,
            'titulo' => $request->input('titulo'),
        ]);

        return redirect()->route('resultados.index')->with('success', 'Imagen y título guardados correctamente.');
    }

    public function eliminar($id)
{
    $imagen = ResultadoImagen::findOrFail($id);
    Storage::delete('public/' . $imagen->ruta);
    $imagen->delete();
    return redirect()->back()->with('success', 'Imagen eliminada correctamente.');
}
}
