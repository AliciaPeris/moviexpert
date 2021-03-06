<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotospeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votospeliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpelicula')->unsigned();
            $table->foreign('idpelicula')->references('id')->on('adminpeliculas');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users');
            $table->integer('voto');
            $table->date('fechavoto');
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
        Schema::drop('votospeliculas');
    }
}
