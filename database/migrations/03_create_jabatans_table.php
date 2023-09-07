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
    Schema::create('jabatan', function (Blueprint $table) {
      $table->id('id_jabatan');
      $table->string('nama_jabatan');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('jabatan');
  }
};
