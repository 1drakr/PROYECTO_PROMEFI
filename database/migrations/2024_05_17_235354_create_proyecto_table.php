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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id('id_proyecto');
            $table->foreignId('id_perfil')->references('id_perfil')->on('perfil');
            $table->string('titulo', 255);
            $table->string('subtitulo', 255);
            $table->string('categoria_principal', 255);
            $table->string('categoria', 255);
            $table->string('subcategoria', 255);
            $table->string('ubicacion', 255);
            $table->binary('imagen'); // LONGBLOB equivale a binary
            $table->string('video', 255);
            $table->date('fecha_limite');
            $table->integer('duracion_campaña');
            $table->decimal('monto_meta', 10, 2);
            $table->text('riesgos_desafios');
            $table->boolean('uso_ia');
            $table->enum('tipo_proyecto', ['individuo', 'empresa', 'organizacion_sin_fines_de_lucro']);
            $table->boolean('pago');
            $table->foreign('id_estado')->references('id_estado')->on('estado');
            $table->boolean('completado');
            $table->timestamps();


        });
    }


    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};

