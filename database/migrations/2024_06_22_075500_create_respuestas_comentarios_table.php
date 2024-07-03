<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_comentario', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta');
            $table->unsignedBigInteger('id_comentario');
            $table->unsignedBigInteger('id_perfil');
            $table->text('contenido');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_comentario')->references('id_comentario')->on('comentario')->onDelete('cascade');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta_comentario');
    }
}
