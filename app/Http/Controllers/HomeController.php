<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Models\Encuesta;



class HomeController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Cargamos todos los partidos para el buscador/galería
        $partidos = Partido::orderBy('name')->get();

        // Devuelve la vista home.blade.php con la variable $partidos
        return view('home', compact('partidos'));
    }

    /**
     * Show the application dashboard (solo para usuarios autenticados).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
public function dashboard()
{
    $provinciales = Encuesta::where('categoria', 'Provincial')->get();
    $distritales = Encuesta::where('categoria', 'Distrital')->get();

    return view('admin.dashboard', compact('provinciales', 'distritales'));
}


}
    