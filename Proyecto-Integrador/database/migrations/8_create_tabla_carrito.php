<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaCarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
          $table->bigInteger('id_user')->unsigned();
          $table->bigInteger('id_producto')->unsigned();
          $table->bigInteger('cantidad')->unsigned();

          $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('carrito');
        $table->dropForeign('carrito_users_id_foreign');
        $table->dropForeign('carrito_productos_id_foreign');
    }
}
