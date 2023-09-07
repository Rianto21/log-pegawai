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
    Schema::create('log_harian', function (Blueprint $table) {
      $table->id('id_log_harian');
      $table->string('title');
      $table->text('body');
      $table->text('foto');
      $table->date('tanggal')->default(date("Y-m-d"));
      $table->unsignedBigInteger('id_pegawai');
      $table->unsignedBigInteger('status')->default(1);
      $table->timestamps();

      $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
      $table->foreign('status')->references('id_status_log_harian')->on('status_log_harian');
    });
  }

  public function down()
  {
    Schema::dropIfExists('log_harian');
  }
};
