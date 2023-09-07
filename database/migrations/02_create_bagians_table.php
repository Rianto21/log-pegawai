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
    Schema::create('bagian', function (Blueprint $table) {
      $table->id('id_bagian')->autoIncrement();
      $table->string('nama_bagian');
      $table->unsignedBigInteger('id_dinas'); // Assuming 'dinas_id' is the foreign key
      $table->timestamps();

      $table->foreign('id_dinas')->references('id_dinas')->on('dinas')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('bagian');
  }
};
