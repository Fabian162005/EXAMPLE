<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescripcionToVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('videos', function (Blueprint $table) {
        $table->string('descripcion', 255)->nullable()->after('url');
    });
}

public function down()
{
    Schema::table('videos', function (Blueprint $table) {
        $table->dropColumn('descripcion');
    });
}
}
