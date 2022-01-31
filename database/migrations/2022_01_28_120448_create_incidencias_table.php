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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->string('email');
            $table->text('descripcion');
            $table->enum('urgencia', ['no prioritario', 'prioritario', 'urgente']);
            $table->enum('averia', ['electrica', 'mecanica', 'estetica']);
            $table->timestamps();
        });
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
