<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historia', function (Blueprint $table) {
            $table->id('id_historia');
            $table->unsignedBigInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->string('titulo', 255);
            $table->text('texto');
            $table->string('video', 255);
            $table->string('imagen', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historia');
    }
};

