<?php
namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    public function index()
    {
        $preguntas = Pregunta::all();
        return response()->json($preguntas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'encuesta_id' => 'required|exists:encuestas,id',
            'texto' => 'required|string',
            'tipo' => 'nullable|string',
            'orden' => 'nullable|integer',
        ]);

        $pregunta = Pregunta::create($request->all());
        return response()->json($pregunta, 201);
    }

    public function show($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        return response()->json($pregunta);
    }

    public function update(Request $request, $id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->update($request->all());
        return response()->json($pregunta);
    }

    public function destroy($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->delete();
        return response()->json(null, 204);
    }
}
