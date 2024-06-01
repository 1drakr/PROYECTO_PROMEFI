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
        Schema::create('usuariopago', function (Blueprint $table) {
            $table->id('id_usuariopago');
            $table->foreignId('id_perfil')->references('id_perfil')->on('perfil');
            $table->string('nombretarjeta');
            $table->string('caducidad');
            $table->string('CVC');
            $table->string('Pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuariopago');
    }
};
