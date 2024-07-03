<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->bigIncrements('id_comentario');
            $table->unsignedBigInteger('id_proyecto');
            $table->unsignedBigInteger('id_perfil');
            $table->text('contenido');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyecto')->onDelete('cascade');
            $table->foreign('id_perfil')->references('id_perfil')->on('perfil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}
