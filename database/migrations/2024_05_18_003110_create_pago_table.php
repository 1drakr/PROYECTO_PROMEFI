<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->id('id_pago');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_perfil');
            $table->string('nombre_legal', 255);
            $table->string('id_fiscal', 255);
            $table->string('nombre_empresa', 255);
            $table->string('direccion_comercio', 255);
            $table->string('telefono', 255);
            $table->string('metodo_pago', 255);
            $table->string('cuenta_bancaria', 255);
            $table->decimal('monto', 10, 2);
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
