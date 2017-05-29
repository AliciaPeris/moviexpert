<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanconcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participanconcursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idconcurso')->unsigned();
            $table->foreign('idconcurso')->references('id')->on('adminconcursos');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users');
            $table->text('otrosparticipantes');
            $table->string('titulo');
            $table->text('descripcion');
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
        Schema::drop('participanconcursos');
    }
}
