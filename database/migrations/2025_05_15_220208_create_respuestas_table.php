<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encuesta_id')->constrained()->onDelete('cascade');
            $table->string('pregunta');
            $table->text('respuesta')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
