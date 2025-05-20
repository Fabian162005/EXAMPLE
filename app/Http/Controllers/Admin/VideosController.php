<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Noticia;


class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo' => 'required|in:youtube,facebook',
            'url' => 'required|url',
            'descripcion' => 'nullable|string|max:255',
            
        ]);

        $video = new Video();
        $video->titulo = $request->titulo;
        $video->tipo = $request->tipo;
        $video->url = $request->url;
        $video->descripcion = $request->descripcion;
        $video->save();

        return back()->with('success', 'Video guardado correctamente.');
    }
public function update(Request $request, $id)
{
    $video = Video::findOrFail($id);

    $request->validate([
        'titulo' => 'required|string|max:255',
        'tipo' => 'required|in:youtube,facebook',
        'url' => 'required|url',
        'descripcion' => 'nullable|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // si videos tienen foto
        'video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg|max:10240', // si permites subir archivo de video
    ]);

    $video->titulo = $request->titulo;
    $video->tipo = $request->tipo;
    $video->url = $request->url;
    $video->descripcion = $request->descripcion;

    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('fotos', 'public');
        $video->foto = $fotoPath;  // solo si la columna foto existe en videos
    }

    if ($request->hasFile('video')) {
        $videoPath = $request->file('video')->store('videos', 'public');
        $video->video = $videoPath;  // solo si la columna video existe en videos
    }

    $video->save();

    return redirect()->back()->with('success', 'Video actualizado correctamente.');
}


    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return back()->with('success', 'Video eliminado correctamente.');
    }

    // NUEVO MÉTODO PARA LA VISTA PÚBLICA
public function publicos(Request $request)
{
    $query = Video::query();

    if ($request->filled('search')) {
        $query->where('titulo', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('start-date')) {
        $query->whereDate('created_at', '>=', $request->input('start-date'));
    }

    if ($request->filled('end-date')) {
        $query->whereDate('created_at', '<=', $request->input('end-date'));
    }

    $videos = $query->orderBy('created_at', 'desc')->paginate(12);

    return view('videos.index', [
        'videos' => $videos,
        'search' => $request->search,
        'startDate' => $request->input('start-date'),
        'endDate' => $request->input('end-date'),
    ]);
}

}
