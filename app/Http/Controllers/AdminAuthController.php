<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // 3.1 Mini-login AJAX desde el navbar
    public function miniLogin(Request $req)
    {
        // aquí validas un usuario fijo o desde .env
        if ($req->user === 'admin' && $req->pass === '1234') {
            // marca la sesión de pre-auth
            session(['admin_logged_in' => true]);
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>false,'message'=>'Credenciales inválidas'],422);
    }

    // 3.2 Login completo (Blade /admin/login)
 public function login(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if ($request->username === 'admin' && $request->password === '1234') {
        session(['admin_logged_in' => true]);
        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Credenciales inválidas');
}

    public function logout()
    {
        Session::forget('admin_logged_in');
        Auth::logout();
        return redirect()->route('admin.login.form');
    }
}
