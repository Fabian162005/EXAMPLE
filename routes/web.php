<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/volver', function () {
    return view('layouts.app');
})->name('app');

Route::get('/menunoticias', function () {
    return view('layouts.menunoticias'); // Aquí se carga el archivo menunoticias.blade.php
})->name('menunoticias');


