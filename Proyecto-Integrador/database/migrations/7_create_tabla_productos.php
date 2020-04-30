<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('imagen')->nullable()->default('NULL');
            $table->unsignedInteger('graduacion_alcoholica');
            $table->unsignedInteger('precio');
            $table->unsignedInteger('puntuacion');
            $table->string('informacion')->nullable()->default('NULL');
            $table->unsignedInteger('stock')->default('0');
            $table->unsignedInteger('volumen');
            $table->bigInteger('id_color')->unsigned ();
            $table->bigInteger('id_estilo')->unsigned ();
            $table->bigInteger('id_marca')->unsigned ();
            $table->bigInteger('id_origen')->unsigned ();

            $table->foreign('id_color')->references('id')->on('colores');
            $table->foreign('id_estilo')->references('id')->on('estilos');
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_origen')->references('id')->on('origenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        $table->dropForeign('colores_productos_id_foreign');
        $table->dropForeign('estilos_productos_id_foreign');
        $table->dropForeign('marcas_productos_id_foreign');
        $table->dropForeign('origenes_productos_id_foreign');
    }
}
