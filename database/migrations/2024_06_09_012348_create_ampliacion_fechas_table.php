<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmpliacionFechasTable extends Migration
{
    public function up()
    {
        Schema::create('ampliacion_fechas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_perfil');
            $table->text('justificacion');
            $table->string('documento_justificacion')->nullable();
            $table->date('nueva_fecha_limite');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto')->onDelete('cascade');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ampliacion_fechas');
    }
}
