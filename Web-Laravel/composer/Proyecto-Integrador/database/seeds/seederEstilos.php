<?php

use Illuminate\Database\Seeder;

class seederEstilos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("estilos")->insert(
          [
              "nombre"=>"India Pale Lagers",
              "detalle"=>"Comparte los mismos aromas y sabores fuertes de lúpulo que se encuentran en las IPA. Pero lo que los distingue es que las IPL se elaboran con levadura lager limpia, lo que les da una calidad más crujiente y fácil de beber.",
          ]

      );


      DB::table("estilos")->insert(
          [
              "nombre"=>"Golden Ale",
              "detalle"=>"Cerveza rubia tipo ALE, refrescante, ligera y fácil de tomar. De amargor ligeramente moderado, de aroma cítrico donde resaltan notas a maracuyá y ananá.",
          ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"Amber lagers",
              "detalle"=>"Una cerveza dorada de cuerpo medio con un carácter de malta tostado
              o caramelo.",  ]

      );


      DB::table("estilos")->insert(
          [
              "nombre"=>"Bock",
              "detalle"=>"se caracteriza por una alta carbonatación y variedades ácidas checas de lúpulo que
               imparten aromas florales y un acabado crujiente y amargo",
                    ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"IPA",
              "detalle"=>"es un estilo de cerveza de tradición inglesa que
              se caracteriza como una ale1​ pálida y espumosa con un alto nivel de alcohol y de lúpulo",
                    ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"Kölsch",
              "detalle"=>"s uno de los estilos de cerveza más estrictamente definidos en Alemania: según Konvention,
               es una cerveza de fermentación superior pálida, altamente atenuada, lupulada, brillante.",
                    ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"Red Ale",
              "detalle"=>"Cerveza ale original de Irlanda.
               Su ligero color rojo es debido al tostado de la cebada además de la malta.",
                    ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"Stout",
              "detalle"=>"se caracteriza por una alta carbonatación y variedades ácidas checas de lúpulo que
               imparten aromas florales y un acabado crujiente y amargo",
                    ]

      );

      DB::table("estilos")->insert(
          [
              "nombre"=>"Porter",
              "detalle"=>"Porter es una cerveza oscura perteneciente a la familia de las ALE, con un profundo
              carácter a malta tostada y también con un sabor amargo originado por el lúpulo",
                    ]

      );



    }
}
