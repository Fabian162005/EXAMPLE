<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriaToEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('encuestas', function (Blueprint $table) {
        $table->string('categoria')->default('Provincial');
    });
}

public function down()
{
    Schema::table('encuestas', function (Blueprint $table) {
        $table->dropColumn('categoria');
    });
}

}
