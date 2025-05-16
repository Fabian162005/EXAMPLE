<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeGrupoIdTypeInRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Cambia el tipo de la columna grupo_id a bigInteger nullable.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respuestas', function (Blueprint $table) {
            $table->bigInteger('grupo_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Vuelve a cambiar grupo_id a uuid nullable.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respuestas', function (Blueprint $table) {
            $table->uuid('grupo_id')->nullable()->change();
        });
    }
}
