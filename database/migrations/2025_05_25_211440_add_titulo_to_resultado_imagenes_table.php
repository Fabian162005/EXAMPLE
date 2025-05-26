<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTituloToResultadoImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultado_imagens', function (Blueprint $table) {
            $table->string('titulo')->after('ruta'); // Agregamos la columna 'titulo'
        });
    }

    public function down()
    {
        Schema::table('resultado_imagens', function (Blueprint $table) {
            $table->dropColumn('titulo');
        });
    }
}
