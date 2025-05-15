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
            $video = Video::findOrFail($id);

            $request->validate([
                'titulo' => 'required|string|max:255',
                'tipo' => 'required|in:youtube,facebook',
                'url' => 'required|url',
                'descripcion' => 'nullable|string|max:255',
            ]);

            $video->titulo = $request->titulo;
            $video->tipo = $request->tipo;
            $video->url = $request->url;
            $video->descripcion = $request->descripcion;
            $video->save();

            return back()->with('success', 'Video actualizado correctamente.');
        }

        public function destroy($id)
        {
            $video = Video::findOrFail($id);
            $video->delete();

            return back()->with('success', 'Video eliminado correctamente.');
        }
    }
