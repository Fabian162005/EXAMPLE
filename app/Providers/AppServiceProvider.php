<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Encuesta;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */



public function boot()
{
    View::composer('*', function ($view) {
        $provinciales = Encuesta::whereHas('categoria', function ($q) {
            $q->where('nombre', 'Provincial');
        })->get();

        $distritales = Encuesta::whereHas('categoria', function ($q) {
            $q->where('nombre', 'Distrital');
        })->get();

        $categorias = Categoria::all(); // 👉 Aquí agregas tus categorías

        $view->with([
            'provinciales' => $provinciales,
            'distritales' => $distritales,
            'categorias' => $categorias, // 👉 Las compartes con todas las vistas
        ]);
    });
}


}
