<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitudproyecto', function (Blueprint $table) {
            $table->id('id_solicitudProy');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamp('fecha_registro')->useCurrent();
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudproyecto');
    }
};

