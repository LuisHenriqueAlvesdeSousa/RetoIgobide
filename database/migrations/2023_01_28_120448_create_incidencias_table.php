<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('incidencias');
        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->string('email');
            $table->text('descripcion');
            $table->unsignedInteger('ascensor_id');
            $table->foreign('ascensor_id')->references('id')->on('ascensors');
            $table->unsignedInteger('tecnico_id');
            $table->foreign('tecnico_id')->references('codigo')->on('tecnicos');
            $table->unsignedInteger('operador_id');
            $table->foreign('operador_id')->references('codigo')->on('operadors');
            $table->enum('urgencia', ['no prioritario', 'prioritario', 'urgente']);
            $table->enum('averia', ['electrica', 'mecanica', 'estetica']);
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
        Schema::dropIfExists('incidencias');
    }
}
