<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Jabatan::insert(array(
      ['nama_jabatan' => 'Kepala Dinas'],
      ['nama_jabatan' => 'Kepala Bagian'],
      ['nama_jabatan' => 'Staff Karyawan'],
    ));
  }
}
