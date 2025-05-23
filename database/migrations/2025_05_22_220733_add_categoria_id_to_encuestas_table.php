<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaIdToEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('encuestas', function (Blueprint $table) {
        $table->unsignedBigInteger('categoria_id')->nullable()->after('nombre');

        // Opcional: llave foránea con integridad referencial
        $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('encuestas', function (Blueprint $table) {
        $table->dropForeign(['categoria_id']);
        $table->dropColumn('categoria_id');
    });
}
}
