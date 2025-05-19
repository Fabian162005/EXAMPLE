<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /**
     * Login admin desde /admin/login (pantalla completa)
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = AdminUser::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['error' => 'Credenciales inválidas'])->withInput();
        }

        session([
            'admin_logged_in' => true,
            'admin_user' => $user->username
        ]);

        return redirect()->route('admin.dashboard');
    }

    /**
     * Logout admin
     */
    public function logout()
    {
        Session::forget('admin_logged_in');
        Session::forget('admin_user');

        return redirect()->route('admin.login.form');
    }
}
