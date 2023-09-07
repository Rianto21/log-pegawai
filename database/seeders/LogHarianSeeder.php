<?php

namespace Database\Seeders;

use App\Models\LogHarian;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogHarianSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Factory::create();
    for ($i = 0; $i < 30; $i++) {
      LogHarian::create([
        'title' => $faker->sentence(5),
        'body' => $faker->paragraph(3),
        'foto' => $faker->image(),
        'tanggal' => $faker->dateTimeBetween('-2 week'),
        'id_pegawai' => $faker->numberBetween(2, 5),
        'status' => $faker->numberBetween(1, 3)
      ]);
    }
  }
}
