<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadoPadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificadoPadre', function (Blueprint $table) {
            $table->increments('idCertificadoPadre');
            $table->string('tipoPadre');
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persona');
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
        Schema::dropIfExists('certificadoPadre');
    }
}
