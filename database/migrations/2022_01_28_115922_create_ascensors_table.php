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
        Schema::create('ascensors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('manual_id');
            $table->string('direccion');
            $table->string('modelo');
            $table->float('capacidad');
            $table->float('peso');
            $table->float('paradas');
            $table->float('recorrido');
            $table->foreign('manual_id')->references('id')->on('manuals');
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
