<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaColores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colores', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->unsignedInteger('red')->nullable()->default(NULL);
          $table->unsignedInteger('green')->nullable()->default(NULL);
          $table->unsignedInteger('blue')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colores');
    }
}
