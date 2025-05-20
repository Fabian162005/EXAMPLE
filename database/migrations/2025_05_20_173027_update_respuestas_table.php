<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRespuestasTable extends Migration
{
    public function up()
    {
        // No hagas nada aquí porque las FKs ya existen
    }

    public function down()
    {
        Schema::table('respuestas', function (Blueprint $table) {
            // Si las FK no fueron creadas aquí, no las elimines
            // $table->dropForeign(['encuestado_id']);
            // $table->dropForeign(['pregunta_id']);
        });
    }
}
