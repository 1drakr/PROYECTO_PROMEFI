<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recompensa', function (Blueprint $table) {
            $table->id('id_recompensa');
            $table->unsignedBigInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto');
            $table->string('titulo', 255);
            $table->decimal('monto', 10, 2);
            $table->string('imagen', 255);
            $table->text('descripcion');
            $table->boolean('complemento');
            $table->boolean('patrocinadores');
            $table->enum('envio', ['envios_todo_mundo', 'envios_algunos_paises', 'retiro_en_sitio', 'recompensa_digital']);
            $table->date('fecha_entrega');
            $table->integer('cantidad');
            $table->integer('tiempo_oferta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recompensa');
    }
};

