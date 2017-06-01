<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajechatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajechats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idmiembro')->unsigned();
            $table->foreign('idmiembro')->references('id')->on('miembrochats');
            $table->text('mensaje');
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
        Schema::drop('mensajechats');
    }
}
