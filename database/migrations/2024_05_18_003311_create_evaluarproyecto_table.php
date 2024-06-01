<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evaluarproyecto', function (Blueprint $table) {
            $table->id('id_evaluarproy');
            $table->unsignedBigInteger('id_solicitud');
            $table->binary('documento_proyecto');
            $table->binary('documento_evaluacion');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_solicitud')->references('id_solicitudProy')->on('solicitudproyecto');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluarproyecto');
    }
};

