<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSacerdoteParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacerdoteParroquia', function (Blueprint $table) {
            $table->increments('idSacerdoteParroquia');
            $table->integer('sacerdote_id')->unsigned();
            $table->foreign('sacerdote_id')->references('idSacerdote')->on('sacerdote');
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
        Schema::dropIfExists('sacerdoteParroquia');
    }
}
