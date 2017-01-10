<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroParroquia', function (Blueprint $table) {
            $table->increments('idLibroParroquia');
            $table->string('libro');
            $table->string('pagina');
            $table->string('numero');
            $table->integer('parroquia_id')->unsigned();
            $table->foreign('parroquia_id')->references('idParroquia')->on('parroquia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroParroquia');
    }
}
