<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImagen;

class SliderController extends Controller
{
public function upload(Request $request)
{
    try {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $relativePath = 'storage/images/' . $filename;

            $file->move(public_path('storage/images'), $filename);

            // Guarda tanto filename como imagen_url
            SliderImagen::create([
                'filename' => $filename,
                'imagen_url' => $relativePath,
            ]);

            return response()->json(['success' => true, 'filename' => $filename]);
        }

        return response()->json(['success' => false, 'message' => 'No se envió ninguna imagen']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()]);
    }
}


public function delete($id)
{
    try {
        // Buscar la imagen en la base de datos
        $imagen = SliderImagen::findOrFail($id);

        // Borrar el archivo de la imagen en el servidor
        $path = public_path($imagen->filename);
        if (file_exists($path)) {
            unlink($path); // Eliminar archivo de la imagen
        }

        // Eliminar la entrada de la base de datos
        $imagen->delete();

        return response()->json(['success' => true, 'message' => 'Imagen eliminada correctamente.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}


}
