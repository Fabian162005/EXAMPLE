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
| VIDEOS
|--------------------------------------------------------------------------
*/

Route::get('/videos', [VideosController::class, 'publicos'])->name('videos.index');

Route::prefix('admin')->group(function () {
    Route::get('/videos', [VideosController::class, 'index'])->name('admin.videos.index');
    Route::post('/videos', [VideosController::class, 'store'])->name('admin.videos.store');
    Route::put('/videos/{id}', [VideosController::class, 'update'])->name('admin.videos.update');
    Route::delete('/videos/{id}', [VideosController::class, 'destroy'])->name('admin.videos.destroy');
});

/*
|--------------------------------------------------------------------------
| SLIDER
|--------------------------------------------------------------------------
*/

Route::post('/admin/slider/upload', [SliderController::class, 'upload'])->name('slider.upload');
Route::delete('/admin/slider/{id}/delete', [SliderController::class, 'delete']);

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
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::get('/', fn() => view('layouts.admin'))->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.a');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

Auth::routes();
