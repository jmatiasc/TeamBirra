<?php

use Illuminate\Database\Seeder;

class seederColores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      DB::table("colores")->insert(
          [
              "nombre"=>"Rojo",
              "red"=>255,
              "blue"=>0,
              "green"=>0,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Verde",
              "red"=>0,
              "blue"=>0,
              "green"=>255,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Marrón",
              "red"=>102,
              "green"=>51,
              "blue"=>0,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Rosa",
              "red"=>255,
              "green"=>153,
              "blue"=>255,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Negro",
              "red"=>0,
              "green"=>0,
              "blue"=>0,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Naranja",
              "red"=>255,
              "green"=>128,
              "blue"=>0,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Morado",
              "red"=>51,
              "green"=>0,
              "blue"=>25,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Purpura",
              "red"=>51,
              "green"=>0,
              "blue"=>102,
          ]

      );

      DB::table("colores")->insert(
          [
              "nombre"=>"Otro",
              "red"=>NULL,
              "green"=>NULL,
              "blue"=>NULL,
          ]

      );


      DB::table("colores")->insert(
          [
              "nombre"=>"Dorado",
              "red"=>212,
              "green"=>175,
              "blue"=>55,
          ]

      );


    }
}
