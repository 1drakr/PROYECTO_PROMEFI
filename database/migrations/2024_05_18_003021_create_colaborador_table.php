<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('colaborador', function (Blueprint $table) {
            $table->id('id_colaborador');
            $table->unsignedBigInteger('id_perfil');
            $table->unsignedBigInteger('id_proyecto');
            $table->string('correo', 255);
            $table->string('titulo', 255);
            $table->enum('permiso', ['editar_proyecto', 'administrar_comunidad', 'coordinar_entrega']);
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('colaborador');
    }
};

