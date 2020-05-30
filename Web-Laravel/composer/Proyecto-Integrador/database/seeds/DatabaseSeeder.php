<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(seederColores::class);
      $this->call(seederEstilos::class);
      $this->call(seederMarcas::class);
      $this->call(seederOrigenes::class);
      $this->call(seederProductos::class);

    }
}
