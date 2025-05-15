<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Traer todas las noticias, de más reciente a más antigua, paginadas
        $noticias = Noticia::orderBy('created_at', 'desc')
                            ->paginate(10);

        // Retornar la vista con la variable noticias
        return view('admin.dashboard', compact('noticias'));

        
    }
}
