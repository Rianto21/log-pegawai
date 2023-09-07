<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Bagian::insert(array(
      ['nama_bagian' => 'Front End', 'id_dinas' => 1],
      ['nama_bagian' => 'Back End', 'id_dinas' => 1]
    ));
  }
}
