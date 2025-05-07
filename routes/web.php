<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('layouts.app');  

});


//RUTA DE LOS VIDEOS-----------------------------------------------------------------------------------------------------------------

// Ruta pública
Route::get('/videos', function () {
    return view('videos.index'); // Vista para la ruta normal
})->name('videos.index');

// Ruta para el administrador
Route::get('/admin/videos', function () {
    return view('admin.videos.index'); // Vista para la administración de videos
})->name('admin.videos.index');


// Ruta para volver al modo Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


//RUTA DE LAS ENCUESTAS-----------------------------------------------------------------------------------------------------------------

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
Route::prefix('admin')->group(function () {
    // Esta ruta es para la página principal del admin, cargará el archivo admin.blade.php
    Route::get('/', function () {
        return view('layouts.admin'); // Aquí se carga la vista admin.blade.php
    })->name('admin.index'); // Ruta principal de admin

    // Ruta para el dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.a');

    // Ruta para los videos del admin
    Route::get('/videos', function () {
        return view('admin.videos.index');
    })->name('admin.videos.index');

    // Ruta para el login
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
});


// Rutas de login y logout
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Auth::routes();

