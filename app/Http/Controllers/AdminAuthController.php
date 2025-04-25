<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        // El login ahora solo redirige a la página del dashboard sin validación
        return redirect()->route('admin.dashboard');
    }
    public function logout(Request $request)
    {
        // Aquí puedes manejar la lógica de logout si fuera necesario, pero no es obligatorio
        return redirect('/');
    }
}