<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dinas extends Model
{
  use HasFactory;

  protected $table = 'dinas';
  protected $primaryKey = 'id_dinas';
  protected $fillable = [
    'nama_dinas',
  ];

  public function pegawai(): HasMany
  {
    return $this->hasMany(Pegawai::class, 'id_dinas', 'id_dinas');
  }

  public function bagian(): HasMany
  {
    return $this->hasMany(Bagian::class, 'id_dinas', 'id_dinas');
  }
}
