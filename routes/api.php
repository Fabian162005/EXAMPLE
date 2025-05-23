<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\EncuestadoController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API ROUTES
|--------------------------------------------------------------------------
|
| Rutas para API de encuestas, preguntas, respuestas, encuestados y categorías.
|
*/

// Encuestas (CRUD + agrupadas)
Route::get('/encuestas', [EncuestaController::class, 'index']);
Route::get('/encuestas/agrupadas', [EncuestaController::class, 'indexAgrupadoPorCategoria']);
Route::get('/encuestas/{id}', [EncuestaController::class, 'show']);
Route::post('/encuestas', [EncuestaController::class, 'store']);
Route::put('/encuestas/{id}', [EncuestaController::class, 'update']);
Route::delete('/encuestas/{id}', [EncuestaController::class, 'destroy']);

// Respuestas (API Resource)
Route::apiResource('respuestas', RespuestaController::class);

// Preguntas (API Resource)
Route::apiResource('preguntas', PreguntaController::class);

// Encuestados (API Resource)
Route::apiResource('encuestados', EncuestadoController::class);

// Categorías (solo listado)
Route::get('/categorias', [CategoriaController::class, 'index']);
