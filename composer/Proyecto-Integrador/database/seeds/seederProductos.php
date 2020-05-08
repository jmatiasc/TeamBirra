<?php

use Illuminate\Database\Seeder;

class seederProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("productos")->insert(
          [
              "nombre"=>"Patagonia Amber Lager",
              "imagen"=>"pat-amb.png",
              "graduacion_alcoholica"=>4,
              "precio"=>170,
              "puntuacion"=>0,
              "informacion"=>"encontrarás una cerveza de un suave sabor a caramelo,
              elaborada con una combinación de 4 maltas, que le dan su característico
              color ámbar y sabor maltoso, dejando un sutil dulzor en boca",
              "stock"=>10,
              "volumen"=>730,
              "id_color"=>3,
              "id_estilo"=>3,
              "id_marca"=>1,
              "id_origen"=>1,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Leffe Royale Blonde",
              "imagen"=>"leffe.png",
              "graduacion_alcoholica"=>7,
              "precio"=>140,
              "puntuacion"=>0,
              "informacion"=>"La última creación de Abbaye de Leffe, Leffe Royale Blonde,
              está elaborada con lúpulo inglés Whitbread Golding, una variedad que evoca
              notas cítricos y elegantes notas florales.",
              "stock"=>15,
              "volumen"=>250,
              "id_color"=>10,
              "id_estilo"=>2,
              "id_marca"=>2,
              "id_origen"=>4,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Patagonia Hoppy Lager",
              "imagen"=>"pat-lag.png",
              "graduacion_alcoholica"=>5,
              "precio"=>170,
              "puntuacion"=>0,
              "informacion"=>"Con una maltosidad que equilibra el amargor, haciéndole
                muy fácil de tomar. De final seco y balanceado, que invita a probar
               otro trago inmediatamente.",
              "stock"=>180,
              "volumen"=>730,
              "id_color"=>3,
              "id_estilo"=>1,
              "id_marca"=>1,
              "id_origen"=>1,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Almirante Donn Session  IPA",
              "imagen"=>"almir.png",
              "graduacion_alcoholica"=>4,
              "precio"=>175,
              "puntuacion"=>0,
              "informacion"=>"Cerveza Artesanal a base de malta de sorgo con un marcado sabor
               a Lupulo balanceado con aromas y notas a frutas tropicales. De color dorado brillante
               con una espuma persistente y una suave carbonatacion.",
              "stock"=>60,
              "volumen"=>330,
              "id_color"=>10,
              "id_estilo"=>5,
              "id_marca"=>3,
              "id_origen"=>3,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Me Echó La Burra IPA",
              "imagen"=>"la-bu.png",
              "graduacion_alcoholica"=>6,
              "precio"=>99,
              "puntuacion"=>0,
              "informacion"=>"Me Echó La Burra es una cerveza especial y artesanal elaborada según la tradición belga a base de cebada malteada, lúpulo y levaduras de calidad. Una Indian Pale Ale elaborada con 4 maltas y 4 lúpulos distintos.",
              "stock"=>10,
              "volumen"=>350,
              "id_color"=>10,
              "id_estilo"=>5,
              "id_marca"=>4,
              "id_origen"=>1,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Mesta Beepure Session IPA",
              "imagen"=>"mesta-1.png",
              "graduacion_alcoholica"=>4,
              "precio"=>200,
              "puntuacion"=>0,
              "informacion"=>"Cerveza rubia con aroma, sabor y amargor intenso. IPA de sesión americana, con notas frutales, cítricas y resinosas. Final refrescante y ligero.",
              "stock"=>20,
              "volumen"=>500,
              "id_color"=>10,
              "id_estilo"=>5,
              "id_marca"=>5,
              "id_origen"=>2,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Straus Session IPA",
              "imagen"=>"stra.png",
              "graduacion_alcoholica"=>4,
              "precio"=>150,
              "puntuacion"=>0,
              "informacion"=>NULL,
              "stock"=>10,
              "volumen"=>355,
              "id_color"=>10,
              "id_estilo"=>5,
              "id_marca"=>6,
              "id_origen"=>3,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Me Echó La Burra Roja B",
              "imagen"=>"la-bur-red.png",
              "graduacion_alcoholica"=>8,
              "precio"=>99,
              "puntuacion"=>0,
              "informacion"=>"Es una cerveza de doble fermentación en botella
               y doble maduración en bodega. Esta es una cerveza aromática, con notas marcadas de caramelo y clavo.",
              "stock"=>10,
              "volumen"=>350,
              "id_color"=>1,
              "id_estilo"=>7,
              "id_marca"=>4,
              "id_origen"=>1,
            ]

      );

      DB::table("productos")->insert(
          [
              "nombre"=>"Me Echó La Burra Negra 8",
              "imagen"=>"la-bur-negr.png",
              "graduacion_alcoholica"=>8,
              "precio"=>99,
              "puntuacion"=>0,
              "informacion"=>"Es una cerveza de doble fermentación
              en botella y doble maduración en bodega. La Negra 8 es una ale de marcado aroma a chocolate, con notas
              en boca de chocolate y café.",
              "stock"=>100,
              "volumen"=>350,
              "id_color"=>5,
              "id_estilo"=>8,
              "id_marca"=>4,
              "id_origen"=>1,
            ]

      );
    }
}
