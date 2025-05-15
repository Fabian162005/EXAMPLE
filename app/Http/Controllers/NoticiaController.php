<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimetypes:video/mp4,video/x-msvideo,video/quicktime|max:20480',
        ]);

        // Subir archivos
        $fotoPath = $request->file('foto')->store('noticias/fotos', 'public');
        $videoPath = $request->file('video') ? $request->file('video')->store('noticias/videos', 'public') : null;

        // Crear noticia
        Noticia::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'foto' => $fotoPath,
            'video' => $videoPath,
        ]);

        return redirect()->back()->with('success', 'Noticia publicada correctamente.');
    }
public function destroy($id)
{
    $noticia = Noticia::findOrFail($id);

    // Eliminar imagen si existe
    if ($noticia->foto && Storage::disk('public')->exists($noticia->foto)) {
        Storage::disk('public')->delete($noticia->foto);
    }

    // Eliminar video si existe
    if ($noticia->video && Storage::disk('public')->exists($noticia->video)) {
        Storage::disk('public')->delete($noticia->video);
    }

    // Eliminar registro de la base de datos
    $noticia->delete();

    return redirect()->back()->with('success', 'Noticia eliminada correctamente.');
}

public function update(Request $request, $id)
{
    $request->validate([
        'titulo'      => 'required|string|max:255',
        'descripcion' => 'required|string',
        'foto'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'video'       => 'nullable|mimetypes:video/mp4,video/ogg,video/webm|max:10240',
    ]);

    $noticia = Noticia::findOrFail($id);

    // Si viene nuevo foto, elimino la anterior y guardo la nueva
    if ($request->hasFile('foto')) {
        if ($noticia->foto && Storage::disk('public')->exists($noticia->foto)) {
            Storage::disk('public')->delete($noticia->foto);
        }
        $noticia->foto = $request->file('foto')->store('noticias/fotos', 'public');
    }

    // Si viene nuevo video, elimino el anterior y guardo el nuevo
    if ($request->hasFile('video')) {
        if ($noticia->video && Storage::disk('public')->exists($noticia->video)) {
            Storage::disk('public')->delete($noticia->video);
        }
        $noticia->video = $request->file('video')->store('noticias/videos', 'public');
    }

    // Actualizo título y descripción
    $noticia->titulo      = $request->titulo;
    $noticia->descripcion = $request->descripcion;
    $noticia->save();

    return redirect()->back()->with('success', 'Noticia actualizada correctamente.');
}

public function show($id)
{
    $noticia = Noticia::findOrFail($id);
    $noticias = Noticia::latest()->take(6)->get(); // Opcional para sidebar u otras secciones
    return view('layouts.noticiasmas.Nuevasnoticias', compact('noticia', 'noticias'));
}





}
