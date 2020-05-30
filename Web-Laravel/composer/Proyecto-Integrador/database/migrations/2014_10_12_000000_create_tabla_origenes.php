<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaOrigenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origenes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('bandera')->nullable()->default('No hay BANDERA disponible');
          $table->string('ubicacion')->nullable()->default('No hay UBICACION disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('origenes');
    }
}
