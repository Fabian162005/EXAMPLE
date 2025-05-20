<?php
namespace App\Http\Controllers;

use App\Models\Encuestado;
use Illuminate\Http\Request;

class EncuestadoController extends Controller
{
    public function index()
    {
        $encuestados = Encuestado::all();
        return response()->json($encuestados);
    }

    public function store(Request $request)
    {
        $request->validate([
            'encuesta_id' => 'required|exists:encuestas,id',
            'genero' => 'nullable|string|max:20',
            'edad' => 'nullable|integer',
        ]);

        $encuestado = Encuestado::create($request->all());

        return response()->json($encuestado, 201);
    }

    public function show($id)
    {
        $encuestado = Encuestado::findOrFail($id);
        return response()->json($encuestado);
    }

    public function update(Request $request, $id)
    {
        $encuestado = Encuestado::findOrFail($id);
        $encuestado->update($request->all());
        return response()->json($encuestado);
    }

    public function destroy($id)
    {
        $encuestado = Encuestado::findOrFail($id);
        $encuestado->delete();
        return response()->json(null, 204);
    }
}
