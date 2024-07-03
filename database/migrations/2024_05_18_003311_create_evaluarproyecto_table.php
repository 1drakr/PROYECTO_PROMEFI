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
            $table->foreignId('id_solicitud')->constrained('solicitudproyecto', 'id_solicitudProy');
            $table->binary('documento_proyecto')->nullable();
            $table->binary('documento_evaluacion')->nullable();
            $table->foreignId('id_estado')->constrained('estado', 'id_estado');
            $table->foreignId('id_evauser')->constrained('perfil', 'id_perfil');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluarproyecto');
    }
};

