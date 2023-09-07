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
    Schema::create('status_log_harian', function (Blueprint $table) {
      $table->id('id_status_log_harian');
      $table->string('nama_status');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('status_log_harian');
  }
};
