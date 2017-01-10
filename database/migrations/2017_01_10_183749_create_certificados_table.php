<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificado', function (Blueprint $table) {
            $table->increments('idCertificado');
            $table->date('fecha');
            //LLAVE FORANEA DE PERSONA
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persona');

            //LLAVE FORANEA DE PARROQUIA
            $table->integer('parroquia_id')->unsigned();
            $table->foreign('parroquia_id')->references('idParroquia')->on('parroquia');

            //LLAVE FORANEA DE SACERDOTE
            $table->integer('sacerdote_id')->unsigned();
            $table->foreign('sacerdote_id')->references('idSacerdote')->on('sacerdote');

            //LLAVE FORANEA DE SACRAMENTO
            $table->integer('sacramento_id')->unsigned();
            $table->foreign('sacramento_id')->references('idSacramento')->on('sacramento');

            //LLAVE FORANEA DE CIUDAD
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('idCiudad')->on('ciudad');

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
        Schema::dropIfExists('certificados');
    }
}
