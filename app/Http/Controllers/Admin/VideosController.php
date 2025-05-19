<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

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
            $noticia = Noticia::findOrFail($id);

            $request->validate([
                'titulo' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg|max:10240', // max 10MB
            ]);

            $noticia->titulo = $request->titulo;
            $noticia->descripcion = $request->descripcion;

            // Si suben una nueva foto
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('fotos', 'public');
                $noticia->foto = $fotoPath;
            }

            // Si suben un nuevo video
            if ($request->hasFile('video')) {
                $videoPath = $request->file('video')->store('videos', 'public');
                $noticia->video = $videoPath;
            }

            $noticia->save();

            return redirect()->back()->with('success', 'Noticia actualizada correctamente.');
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
