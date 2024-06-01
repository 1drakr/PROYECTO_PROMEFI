<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('complemento', function (Blueprint $table) {
            $table->id('id_complemento');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_recompensa');
            $table->string('nombre', 255);
            $table->string('imagen', 255);
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->foreign('id_recompensa')->references('id_recompensa')->on('recompensa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complemento');
    }
};

