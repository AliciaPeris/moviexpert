<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmingenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admingeneros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genero');
            $table->timestamps();
            $table->foreign('genero')->references('id')->on('adminpelicula')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admingeneros');
    }
}
