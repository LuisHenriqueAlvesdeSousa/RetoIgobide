<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAscensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ascensors');
        Schema::create('ascensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('modelo');
            $table->float('capacidad');
            $table->float('peso');
            $table->float('paradas');
            $table->float('recorrido');
            $table->integer('manual_id');
            $table->foreign('manual_id')->references('id')->on('manuals')->onDelete('cascade');
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
        Schema::dropIfExists('ascensors');
    }
}