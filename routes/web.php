<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('layouts.home');


//RUTA DE LAS ENCUESTAS-----------------------------------------------------------------------------------------------------------------
});
Route::get('/encuestas/lima', function () {
    return view('encuestas.lima');
});


Route::get('/encuestas/chiclayo', function () {
    return view('encuestas.chiclayo');
});

Route::get('/encuestas/piura', function () {
    return view('encuestas.piura');
});
Route::get('/encuestas/morropon', function () {
    return view('encuestas.morropon');
});

Route::get('/encuestas/castilla', function () {
    return view('encuestas.castilla');
});

Route::get('/encuestas/plura2', function () {
    return view('encuestas.plura2');
});
//----------------------------------------------------------------------------------------------------------------------------------------
Route::get('/noticias', function () {
    return view('layouts.noticias');
})->name('noticias');

Route::get('/volver', function () {
    return view('layouts.app');
})->name('app');

Route::get('/menunoticias', function () {
    return view('layouts.menunoticias'); // Aquí se carga el archivo menunoticias.blade.php
})->name('menunoticias');

//RUTAS CREADAS PARA ADMIN //
// Rutas para autenticación y admin
Route::prefix('admin')->group(function () {
    // Esta ruta es para el dashboard, solo mostrará la vista
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Esta es la ruta para el login, sin autenticación real
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

// Rutas de login y logout
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Auth::routes();