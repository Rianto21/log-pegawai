<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('pegawai', function (Blueprint $table) {
      $table->id('id_pegawai');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('nama_pegawai');
      $table->unsignedBigInteger('id_dinas');
      $table->unsignedBigInteger('id_bagian');
      $table->unsignedBigInteger('jabatan');
      $table->timestamps();

      $table->foreign('id_dinas')->references('id_dinas')->on('dinas');
      $table->foreign('id_bagian')->references('id_bagian')->on('bagian');
      $table->foreign('jabatan')->references('id_jabatan')->on('jabatan');
    });
  }

  public function down()
  {
    Schema::dropIfExists('pegawai');
  }
};
