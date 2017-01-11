<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActivacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userActivacion', function (Blueprint $table){
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->string('token');
          $table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::table('users', function (Blueprint $table){
          $table->boolean('is_activated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userActivacion');
        Schema::table('users', function (Blueprint $table){
          $table->dropColumn('is_activated');
        });
    }
}
