<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pago_creador', function (Blueprint $table) {
            $table->id('id_pago_creador');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_perfil');
            $table->decimal('monto', 10, 2);
            $table->string('metodo_pago', 255);
            $table->string('cuenta_bancaria', 255);
            $table->timestamps();

            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pago_creador');
    }
};
