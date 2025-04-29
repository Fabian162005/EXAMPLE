<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function show($nombre)
    {
        // Asegurar formato consistente (ej: "Acción Popular" → "accion-popular")
        $nombreFormateado = $this->formatearNombreVista($nombre);
        $vista = "partidos.{$nombreFormateado}";

        // Verificar si la vista existe
        if (!view()->exists($vista)) {
            abort(404, "La página del partido no existe");
        }

        return view($vista, [
            'partido' => [
                'nombre' => $nombre,
                // Otros datos que quieras pasar...
            ]
        ]);
    }

    // Función para convertir nombres a formato de vista (ej: "Fuerza Popular" → "fuerza-popular")
    private function formatearNombreVista($nombre)
    {
        return strtolower(
            preg_replace(['/[^a-zA-Z0-9\-]/', '/\-+/'], '-', $nombre)
        );
    }
}