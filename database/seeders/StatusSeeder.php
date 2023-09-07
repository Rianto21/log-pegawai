<?php

namespace Database\Seeders;

use App\Models\StatusLogHarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    StatusLogHarian::insert(array(
      ['nama_status' => 'Pending'],
      ['nama_status' => 'Disetujui'],
      ['nama_status' => 'Ditolak'],
    ));
  }
}
