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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id('id_perfil');
            $table->foreignId('id_users')->constrained('users');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Avatar')->nullable();
            $table->text('Biografia')->nullable();
            $table->boolean('Privacidad')->default(false);
            $table->string('Ubicacion')->nullable();
            $table->string('ZonaHoraria')->nullable();
            $table->string('UrlPerso')->nullable();
            $table->string('SitioWeb')->nullable();
            $table->foreignId('id_rol')->references('id_rol')->on('rol');
            $table->boolean('Estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
