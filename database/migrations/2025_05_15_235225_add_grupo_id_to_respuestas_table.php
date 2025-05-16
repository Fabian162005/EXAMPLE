<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGrupoIdToRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('respuestas', function (Blueprint $table) {
    $table->uuid('grupo_id')->nullable();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
  public function down()
{
    Schema::table('respuestas', function (Blueprint $table) {
        $table->dropColumn('grupo_id');
    });
}

}
