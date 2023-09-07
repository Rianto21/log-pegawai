<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bagian;
use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      DinasSeeder::class,
      BagianSeeder::class,
      JabatanSeeder::class,
      PegawaiSeeder::class,
      StatusSeeder::class,
      LogHarianSeeder::class
    ]);
  }
}
