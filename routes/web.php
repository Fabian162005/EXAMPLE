<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/noticias', function () {
    return view('layouts.noticias');
})->name('noticias');

Route::get('/volver', function () {
    return view('layouts.app');
})->name('app');

Route::get('/menunoticias', function () {
    return view('layouts.menunoticias'); // Aquí se carga el archivo menunoticias.blade.php
})->name('menunoticias');


