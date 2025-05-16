<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilenameToSliderImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */public function up()
{
    Schema::table('slider_imagenes', function (Blueprint $table) {
        $table->string('filename')->after('id'); // o donde prefieras colocarla
    });
}

public function down()
{
    Schema::table('slider_imagenes', function (Blueprint $table) {
        $table->dropColumn('filename');
    });
}

}
