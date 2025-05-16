<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\EncuestaController;
use App\Models\Noticia;

/*
|--------------------------------------------------------------------------
| RUTAS PRINCIPALES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $noticias = Noticia::orderBy('created_at', 'desc')->take(6)->get();
    return view('layouts.app', compact('noticias'));
});

Route::get('/noticias', function () {
    return view('layouts.noticias');
})->name('noticias');

Route::get('/volver', function () {
    $noticias = Noticia::latest()->get();
    return view('layouts.app', compact('noticias'));
})->name('app');

Route::get('/menunoticias', function () {
    return view('layouts.menunoticias');
})->name('menunoticias');

/*
|--------------------------------------------------------------------------
| ENCUESTAS (VISTAS)
|--------------------------------------------------------------------------
*/

Route::view('/encuestas/lima', 'encuestas.lima')->name('encuestas.lima');
Route::view('/encuestas/chiclayo', 'encuestas.chiclayo')->name('encuestas.chiclayo');
Route::view('/encuestas/piura', 'encuestas.piura')->name('encuestas.piura');
Route::view('/encuestas/morropon', 'encuestas.morropon')->name('encuestas.morropon');
Route::view('/encuestas/castilla', 'encuestas.castilla')->name('encuestas.castilla');
Route::view('/encuestas/plura2', 'encuestas.plura2')->name('encuestas.plura2');

/*
|--------------------------------------------------------------------------
| ENCUESTAS (CONTROLADOR)
|--------------------------------------------------------------------------
*/
Route::post('/encuestas', [EncuestaController::class, 'store'])->name('encuestas.store');

/*
|--------------------------------------------------------------------------
| VIDEOS PÚBLICOS
|--------------------------------------------------------------------------
*/

Route::get('/videos', [VideosController::class, 'publicos'])->name('videos.index');

/*
|--------------------------------------------------------------------------
| MINI-LOGIN AJAX (desde el navbar)
|--------------------------------------------------------------------------
*/
Route::post('/admin/mini-login', [AdminAuthController::class,'miniLogin'])->name('admin.mini.login');



/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS ADMIN
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', fn() => view('layouts.admin'))->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        // Dashboard oculto
        Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
        // ... demás rutas admin ...
        Route::post('/slider/upload',[SliderController::class,'upload'])->name('slider.upload');
        Route::delete('/slider/{id}',[SliderController::class,'delete'])->name('slider.delete');
        Route::resource('noticias',NoticiaController::class,['as'=>'admin']);
        Route::resource('videos',VideosController::class,['as'=>'admin']);
        Route::post('/logout',[AdminAuthController::class,'logout'])->name('admin.logout');
    });

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN - PÚBLICO
|--------------------------------------------------------------------------
*/

// Mostrar formulario login admin (GET)
Route::get('/admin/login', function () {
    return view('admin.login'); // Aquí crea la vista resources/views/admin/login.blade.php
})->name('admin.login.form');

// Procesar login admin (POST)
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

/*
|--------------------------------------------------------------------------
| NOTICIAS
|--------------------------------------------------------------------------
*/

Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
Route::put('/noticias/{id}', [NoticiaController::class, 'update'])->name('noticias.update');
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->name('noticias.show');

/*
|--------------------------------------------------------------------------
| PARTIDOS
|--------------------------------------------------------------------------
*/

Route::get('/partidos/{nombre}', [PartidoController::class, 'show']);

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN GENERAL (Laravel default)
|--------------------------------------------------------------------------
*/

Auth::routes();
