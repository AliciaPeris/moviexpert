<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminchats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('numguionistas');
            $table->integer('numactores');
            $table->integer('numdirectores');
            $table->integer('numcamaras');
            $table->timestamps();
            $table->integer('creadorchat')->unsigned();
            $table->foreign('creadorchat')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adminchats');
    }
}
