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
        Schema::create('redessociale', function (Blueprint $table) {
            $table->id('id_redessociale');
            $table->foreignId('id_perfil')->references('id_perfil')->on('perfil');
            $table->foreignId('id_perfil_amigo')->references('id_perfil')->on('perfil');
            $table->timestamp('fecha')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redessociale');
    }
};
