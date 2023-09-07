<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Faker\Factory;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Factory::create();
    Pegawai::insert(array(
      [
        'email' => "kepaladinas@logtim.com",
        'password' => Hash::make('12345678'),
        'nama_pegawai' => $faker->name(),
        'jabatan' => 1,
        'id_dinas' => 1,
        'id_bagian' => 1,
      ],
      [
        'email' => "kepalabagian1@logtim.com",
        'password' => Hash::make('12345678'),
        'nama_pegawai' => $faker->name(),
        'jabatan' => 2,
        'id_dinas' => 1,
        'id_bagian' => 1,
      ],
      [
        'email' => "kepalabagian2@logtim.com",
        'password' => Hash::make('12345678'),
        'nama_pegawai' => $faker->name(),
        'jabatan' => 2,
        'id_dinas' => 1,
        'id_bagian' => 2,
      ],
      [
        'email' => "pegawai1@logtim.com",
        'password' => Hash::make('12345678'),
        'nama_pegawai' => $faker->name(),
        'jabatan' => 3,
        'id_dinas' => 1,
        'id_bagian' => 1,
      ],
      [
        'email' => "pegawai2@logtim.com",
        'password' => Hash::make('12345678'),
        'nama_pegawai' => $faker->name(),
        'jabatan' => 3,
        'id_dinas' => 1,
        'id_bagian' => 2,
      ],
    ));
  }
}
