<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\EncuestaAdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\EncuestadoController;
use App\Http\Controllers\PartidoController;
use App\Models\Noticia;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS PRINCIPALES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $noticias = Noticia::orderBy('created_at', 'desc')->take(6)->get();
    return view('layouts.app', compact('noticias'));
});

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->name('noticias.show');
Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
Route::put('/noticias/{id}', [NoticiaController::class, 'update'])->name('noticias.update');
Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');

Route::get('/menunoticias', fn() => view('layouts.menunoticias'))->name('menunoticias');

Route::get('/volver', function () {
    $noticias = Noticia::latest()->get();
    return view('layouts.app', compact('noticias'));
})->name('app');

Route::get('/videos', [VideosController::class, 'publicos'])->name('videos.index');

/*
|--------------------------------------------------------------------------
| ENCUESTAS PÚBLICAS POR CIUDAD
|--------------------------------------------------------------------------
*/

// Rutas para mostrar las vistas de encuestas por ciudad
Route::view('/encuestas/lima', 'encuestas.lima')->name('encuestas.lima');
Route::view('/encuestas/chiclayo', 'encuestas.chiclayo')->name('encuestas.chiclayo');
Route::view('/encuestas/piura', 'encuestas.piura')->name('encuestas.piura');
Route::view('/encuestas/morropon', 'encuestas.morropon')->name('encuestas.morropon');
Route::view('/encuestas/castilla', 'encuestas.castilla')->name('encuestas.castilla');
Route::view('/encuestas/plura2', 'encuestas.plura2')->name('encuestas.plura2');

// Envío de respuestas para todas las encuestas
Route::post('/encuestas', [EncuestaController::class, 'store'])->name('encuestas.store');

// Obtener respuestas con info de encuesta (para administración en JSON)
Route::get('/respuestas-con-encuesta', [EncuestaController::class, 'obtenerRespuestasConEncuesta'])->name('respuestas.con.encuesta');

// CRUD REST completo para respuestas, preguntas y encuestados (API)
Route::apiResource('respuestas', RespuestaController::class);
Route::apiResource('preguntas', PreguntaController::class);
Route::apiResource('encuestados', EncuestadoController::class);

/*
|--------------------------------------------------------------------------
| PARTIDOS POLÍTICOS
|--------------------------------------------------------------------------
*/

Route::get('/partidos/{nombre}', [PartidoController::class, 'show'])->name('partidos.show');

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN ADMIN (mini-login desde navbar)
|--------------------------------------------------------------------------
*/

Route::post('/admin/mini-login', [AdminAuthController::class, 'miniLogin'])->name('admin.mini.login');

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN PÚBLICO (solo usuario 'ELVIS')
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', fn() => view('admin.login'))->name('admin.login.form');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

/*
|--------------------------------------------------------------------------
| RUTAS ADMIN PROTEGIDAS (requiere middleware 'admin')
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['admin'])->name('admin.')->group(function () {

    Route::get('/', fn() => view('layouts.admin'))->name('index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Slider
    Route::post('/slider/upload', [SliderController::class, 'upload'])->name('slider.upload');
    Route::delete('/slider/{id}/delete', [SliderController::class, 'delete'])->name('slider.delete');

    // CRUD Noticias y Videos
    Route::resource('noticias', NoticiaController::class);
    Route::resource('videos', VideosController::class);

    // Rutas para administración de encuestas por nombre
    Route::get('/encuestas/{nombre}', [EncuestaAdminController::class, 'verEncuesta'])->name('encuestas.ver');

    // Logout admin
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN GENERAL (Laravel default)
|--------------------------------------------------------------------------
*/

// Si usas Laravel Breeze, Jetstream o Fortify, aquí agregarías:
// Auth::routes();

