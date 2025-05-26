<?php

use App\Http\Controllers\ResultadoImagenController;
use App\Models\ResultadoImagen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PartidoController;
use App\Models\Noticia;
use App\Models\Resultado;
use App\Http\Controllers\RespuestaController;


/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS PRINCIPALES
|--------------------------------------------------------------------------
*/

// Página principal con últimas 6 noticias
Route::get('/', function () {
    $noticias = Noticia::orderBy('created_at', 'desc')->take(6)->get();
    return view('layouts.app', compact('noticias'));
})->name('home');

// CRUD Noticias públicas (considera usar Route::resource si quieres todas las rutas RESTful)
Route::prefix('noticias')->group(function () {
    Route::get('/', [NoticiaController::class, 'index'])->name('noticias.index');
    Route::get('/{id}', [NoticiaController::class, 'show'])->name('noticias.show');
    Route::post('/', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::put('/{id}', [NoticiaController::class, 'update'])->name('noticias.update');
    Route::delete('/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
});

// Vista menú noticias
Route::get('/menunoticias', fn() => view('layouts.menunoticias'))->name('menunoticias');

// Ruta para volver a página principal con todas las noticias
Route::get('/volver', function () {
    $noticias = Noticia::latest()->get();
    return view('layouts.app', compact('noticias'));
})->name('app');

// Videos públicos
Route::get('/videos', [VideosController::class, 'publicos'])->name('videos.index');

/*
|--------------------------------------------------------------------------
| ENCUESTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

// Mostrar encuesta pública por slug (nombre amigable en URL)
Route::get('/encuestas/{slug}', [EncuestaController::class, 'verPublica'])->name('encuestas.ver');

// Ruta para guardar respuestas o encuestas públicas
Route::post('/encuestas', [EncuestaController::class, 'store'])->name('encuestas.store');

// Resultados públicos con detalles
Route::get('/respuestas-con-nombre', [EncuestaController::class, 'obtenerRespuestasConNombre'])->name('respuestas.con.nombre');
Route::post('/respuestas', [RespuestaController::class, 'store'])->name('respuestas.store');

// Vistas públicas
Route::get('/verResultados', function () {
    $imagenes = ResultadoImagen::latest()->get();
    return view('verResultados', compact('imagenes'));
})->name('verResultados');

// Vista ADMIN para subir y mostrar fotos
Route::get('/adminVerResultados', [ResultadoImagenController::class, 'index'])->name('resultados.index');
Route::post('/adminVerResultados', [ResultadoImagenController::class, 'store'])->name('resultados.subirFoto');
Route::delete('/admin/resultados/{id}', [ResultadoImagenController::class, 'eliminar'])->name('resultados.eliminar');


/*
|--------------------------------------------------------------------------
| PARTIDOS POLÍTICOS
*/

// Mostrar partido por nombre
Route::get('/partidos/{nombre}', [PartidoController::class, 'show'])->name('partidos.show');

/*
|--------------------------------------------------------------------------
| LOGIN Y ADMINISTRACIÓN
|--------------------------------------------------------------------------
*/

// Mini-login desde navbar
Route::post('/admin/mini-login', [AdminAuthController::class, 'miniLogin'])->name('admin.mini.login');

// Login principal admin
Route::get('/admin/login', fn() => view('admin.login'))->name('admin.login.form');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

// Rutas protegidas con middleware 'admin'
Route::prefix('admin')->middleware(['admin'])->name('admin.')->group(function () {

    // Dashboard (home admin)
    Route::get('/', [AdminController::class, 'dashboard'])->name('index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Slider: subir y borrar imágenes
    Route::post('/slider/upload', [SliderController::class, 'upload'])->name('slider.upload');
    Route::delete('/slider/{id}/delete', [SliderController::class, 'delete'])->name('slider.delete');

    // CRUD Noticias y Videos
    Route::resource('noticias', NoticiaController::class);
    Route::resource('videos', VideosController::class);

    // Ver encuesta admin por nombre (corregido para no tener 'admin/admin')
    Route::get('/encuestas/{slug}', [EncuestaController::class, 'verAdmin'])->name('encuestas.verAdmin');
    Route::put('/encuestas/{id}/actualizar', [EncuestaController::class, 'actualizar'])->name('encuestas.actualizar');


    // Logout admin
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});
    //apartado de busqueda del navbar
    use App\Http\Controllers\BusquedaController;

Route::get('/buscar', [BusquedaController::class, 'buscar'])->name('buscar');
