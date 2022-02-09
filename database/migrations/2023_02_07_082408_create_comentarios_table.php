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
        Schema::dropIfExists('comentarios');
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->text('informacion');
            $table->dateTime('fechaActu');
            $table->unsignedInteger('tecnico_id');
            $table->foreign('tecnico_id')->references('codigo')->on('tecnicos');
            $table->unsignedInteger('incidencia_id');
            $table->foreign('incidencia_id')->references('id')->on('incidencias');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
