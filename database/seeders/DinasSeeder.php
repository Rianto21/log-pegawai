<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Dinas::create([
      'nama_dinas' => 'Dinas Perkodingan Log Harian TIM'
    ]);
  }
}
