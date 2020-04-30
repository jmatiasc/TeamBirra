<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePromociones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promociones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_producto')-> unsigned ();
            $table->unsignedInteger('descuento');
            $table->timestamps();

            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promociones');
        $table->dropForeign('promociones_productos_id_foreign');
    }
}
