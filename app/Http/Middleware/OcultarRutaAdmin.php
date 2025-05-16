<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OcultarRutaAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Aquí decides si bloqueas el acceso
        // Por ejemplo, si no es admin o si accede directamente sin permisos
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Acceso denegado.');
        }

        return $next($request);
    }
}
