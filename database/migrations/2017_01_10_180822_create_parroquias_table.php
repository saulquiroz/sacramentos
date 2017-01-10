<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquia', function (Blueprint $table){
          $table->increments('idParroquia');
          $table->string('nombre');
          $table->string('direccion');
          $table->integer('jurisdiccion_id')->unsigned();
          $table->foreign('jurisdiccion_id')->references('idJurisdiccion')->on('jurisdiccion');
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
        Schema::dropIfExists('parroquia');
    }
}
