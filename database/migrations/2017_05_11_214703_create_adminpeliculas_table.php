<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminpeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminpeliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('anio');
            $table->string('pais');
            $table->string('director');
            $table->text('guion');
            $table->text('reparto');
            $table->text('sinopsis');
            $table->string('trailer');
            $table->string('cartelera');
            $table->timestamps();
            $table->integer('genero')->unsigned();
            $table->foreign('genero')->references('id')->on('admingeneros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adminpeliculas');
    }
}
