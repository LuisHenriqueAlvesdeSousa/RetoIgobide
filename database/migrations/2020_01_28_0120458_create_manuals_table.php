<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('ruta');
            $table->foreign('id')->references('manual_id')->on('acensors')->onDelete('cascade');
            $table->timestamps();
        });
        
        /*
            Schema::create('manuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruta');
            $table->timestamps(); 
            });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuals');
    }
}
