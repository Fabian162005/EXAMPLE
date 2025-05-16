<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Log para depuración
        \Log::info('Cargando dashboard. Admin logged in: ' . (session('admin_logged_in') ? 'sí' : 'no'));
        Log::info('Entrando a dashboard');
        Log::info('Usuario: ' . optional(auth()->user())->email);
        Log::info('Admin logged in: ' . (session('admin_logged_in') ? 'sí' : 'no'));

        // Traer todas las noticias, de más reciente a más antigua, paginadas
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(10);

        // Retornar la vista con las noticias
        return view('admin.dashboard', compact('noticias'));
    }
}
