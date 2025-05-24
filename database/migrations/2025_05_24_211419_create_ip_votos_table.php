<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('ip_votos', function (Blueprint $table) {
        $table->id();
        $table->string('ip');
        $table->unsignedBigInteger('encuesta_id'); // Para saber en qué encuesta se votó
        $table->timestamps();

        $table->unique(['ip', 'encuesta_id']); // evita duplicados IP-Encuesta
        $table->foreign('encuesta_id')->references('id')->on('encuestas')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('ip_votos');
}

}
