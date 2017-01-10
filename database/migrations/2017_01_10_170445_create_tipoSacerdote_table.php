<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoSacerdoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tipoSacerdote', function (Blueprint $table)
      {
         //llave primaria
          $table->increments('idTipoSacerdote');
          //tipo -> tipoSacerdote
          $table->string('tipoSacerdote');
      });
    }

    public function down()
    {
        Schema::drop('tipoSacerdote');
    }
}
