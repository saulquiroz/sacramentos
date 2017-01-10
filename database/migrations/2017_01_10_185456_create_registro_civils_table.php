<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroCivilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroCivil', function (Blueprint $table) {
            $table->increments('idRegistroCivil');
            $table->string('oficialia');
            $table->string('partida');
            $table->string('numero');
            $table->integer('certificado_id')->unsigned();
            $table->foreign('certificado_id')->references('idCertificado')->on('certificado');
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
        Schema::dropIfExists('registroCivil');
    }
}
