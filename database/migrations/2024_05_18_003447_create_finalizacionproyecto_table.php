<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('finalizacionproyecto', function (Blueprint $table) {
            $table->id('id_finalizacionproyecto');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_perfil');
            $table->binary('documento_recompensa');
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('finalizacionproyecto');
    }
};
