<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunts', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('respuestaCorrecta');
            $table->string('respuestaError1');
            $table->string('respuestaError2');
            $table->string('respuestaError3');
            $table->unsignedBigInteger('id_tematica')->nullable();
            $table->foreign('id_tematica')->references('id')->on('tematicas');
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
        Schema::dropIfExists('pregunts');
    }
}
