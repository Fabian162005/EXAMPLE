<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Encuesta;
use Illuminate\Support\Facades\View;

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

        $view->with('provinciales', $provinciales)->with('distritales', $distritales);
    });
}

}
