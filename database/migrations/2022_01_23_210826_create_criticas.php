<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criticas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subtitulo_id');
            $table->boolean('criticado');
            $table->string('titulo_pelicula', '255')->nullable(); //No es necesario tener un campo voto positivo o negativo porque lo determino chequeando si este campo está o no en null. Si está en null, es porque el sub no sirvió. Si tiene contenido, es porque aplicó para un título de peli X.

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subtitulo_id')->references('id')->on('subtitulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criticas');
    }
}
