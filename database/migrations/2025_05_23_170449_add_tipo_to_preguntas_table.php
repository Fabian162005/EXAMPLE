<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoToPreguntasTable extends Migration
{
    public function up()
    {
        Schema::table('preguntas', function (Blueprint $table) {
            $table->string('tipo')->default('texto'); // valores posibles: texto, radio, checkbox
        });
    }

    public function down()
    {
        Schema::table('preguntas', function (Blueprint $table) {
            $table->dropColumn('tipo');
        });
    }
}
