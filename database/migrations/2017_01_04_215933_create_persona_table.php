<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) 
        { 
            $table->increments('id');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechanacimiento');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero')->onDelete('cascade');
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
        //
    }
}
