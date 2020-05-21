<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')-> unsigned ();
            $table->bigInteger('id_producto')-> unsigned ();
            $table->bigInteger('numeroPedido');
            $table->bigInteger('cantidad');
            $table->string('metodo_pago');
            $table->string('direccion');
            $table->string('estado')->default("En preparación");
            $table->timestamps();

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
        Schema::dropIfExists('pedidos');
        $table->dropForeign('pedidos_users_id_foreign');
        $table->dropForeign('pedidos_productos_id_foreign');
    }
}
