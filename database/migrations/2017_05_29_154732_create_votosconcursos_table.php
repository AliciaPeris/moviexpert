<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotosconcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votosconcursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcortoconcurso')->unsigned();
            $table->foreign('idcortoconcurso')->references('id')->on('participanconcursos');
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
        Schema::drop('votosconcursos');
    }
}
