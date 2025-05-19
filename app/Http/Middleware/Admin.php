<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Maneja la petición entrante y verifica que el usuario esté autenticado como admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificar si la sesión 'admin_logged_in' existe y es true
        if (!session()->has('admin_logged_in') || session('admin_logged_in') !== true) {
            // Si la petición es AJAX, responder con JSON
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['error' => 'Acceso restringido: debes iniciar sesión como administrador.'], 401);
            }

            // Para peticiones normales, redirigir al login con mensaje de error en sesión flash
            return redirect()->route('admin.login.form')
                ->with('error', 'Acceso restringido: debes iniciar sesión como administrador.');
        }

        // Usuario autenticado como admin, permitir continuar
        return $next($request);
    }
}
