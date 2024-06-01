<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('validacionproyecto', function (Blueprint $table) {
            $table->id('id_validacionproy');
            $table->unsignedBigInteger('id_evaluacionproy');
            $table->binary('documento_validacion');
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_evaluacionproy')->references('id_evaluarproy')->on('evaluarproyecto');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('validacionproyecto');
    }
};
