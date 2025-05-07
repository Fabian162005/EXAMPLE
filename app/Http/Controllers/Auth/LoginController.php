<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;  
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |---------------------------------------------------------------------------
    | Login Controller
    |---------------------------------------------------------------------------
    |
    | Este controlador maneja la autenticación de usuarios para la aplicación y
    | los redirige a la pantalla principal o al dashboard del admin, dependiendo
    | de su rol. El controlador usa un trait para proporcionar la funcionalidad
    | de autenticación.
    |
    */

    use AuthenticatesUsers;

    /**
     * Donde redirigir a los usuarios después del login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Crear una nueva instancia del controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirige a los usuarios a diferentes lugares después del login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        // Si el usuario es un admin, redirigir a la vista del dashboard de admin
        if ($user->is_admin) {
            return redirect()->route('admin.index');  // Aquí puedes personalizar la ruta
        }

        // Si no es admin, redirigir al home o a donde quieras
        return redirect()->route('home');
    }
}
