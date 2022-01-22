<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtitulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtitulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion');
            $table->integer('cantidad_descargas');
            $table->integer('cantidad_upvotes');
            $table->integer('cantidad_downvotes');
            $table->date('created_at');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtitulos');
    }
}
