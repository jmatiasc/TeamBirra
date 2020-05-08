<?php

use Illuminate\Database\Seeder;

class seederMarcas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("marcas")->insert(
          [
              "nombre"=>"Patagonia",
              "logo"=>NULL
                    ]

      );

      DB::table("marcas")->insert(
          [
              "nombre"=>"Leffe Royale Blonde",
              "logo"=>NULL
                    ]

      );


      DB::table("marcas")->insert(
          [
              "nombre"=>"Almirante Donn",
              "logo"=>NULL
                    ]

      );


      DB::table("marcas")->insert(
          [
              "nombre"=>"Me Echó La Burra",
              "logo"=>NULL
                    ]

      );

      DB::table("marcas")->insert(
          [
              "nombre"=>"Mesta Nostra",
              "logo"=>NULL
                    ]

      );

      DB::table("marcas")->insert(
          [
              "nombre"=>"Stratus",
              "logo"=>NULL
                    ]

      );


    }
}
