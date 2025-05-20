<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('encuestados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encuesta_id')->constrained('encuestas')->onDelete('cascade');
            $table->enum('genero', ['masculino', 'femenino', 'otro']);
            $table->unsignedTinyInteger('edad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('encuestados');
    }
};
