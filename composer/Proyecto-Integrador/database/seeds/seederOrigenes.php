<?php

use Illuminate\Database\Seeder;

class seederOrigenes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("origenes")->insert(
          [
              "nombre"=>"Argentina",
              "Bandera"=>NULL,
              "Ubicacion"=>NULL  ]

      );

      DB::table("origenes")->insert(
          [
              "nombre"=>"Estados Unidos",
              "Bandera"=>NULL,
              "Ubicacion"=>NULL  ]

      );

      DB::table("origenes")->insert(
          [
              "nombre"=>"Irlanda",
              "Bandera"=>NULL,
              "Ubicacion"=>NULL  ]

      );

      DB::table("origenes")->insert(
          [
              "nombre"=>"Belgica",
              "Bandera"=>NULL,
              "Ubicacion"=>NULL  ]

      );

    }
}
