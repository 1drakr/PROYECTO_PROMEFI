<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('comentario', function (Blueprint $table) {
        //     $table->id('id_comentario');
        //     $table->foreignId('id_proyecto')->references('id_proyecto')->on('proyecto');
        //     $table->foreignId('id_perfil')->references('id_perfil')->on('perfil');
        //     $table->text('contenido');
        //     $table->timestamp('fecha')->useCurrent();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('comentario');
    }
};
