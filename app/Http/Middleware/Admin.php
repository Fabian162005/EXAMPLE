<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login.form')
                ->with('error', 'Acceso restringido: debes iniciar sesión como administrador.');
        }

        return $next($request);
    }
}
