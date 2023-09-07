<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bagian extends Model
{
  use HasFactory;
  protected $table = 'bagian';
  protected $primaryKey = 'id_bagian';
  protected $fillable = [
    'nama_bagian',
  ];

  public function dinas(): BelongsTo
  {
    return $this->belongsTo(Dinas::class);
  }
  public function pegawai(): HasMany
  {
    return $this->hasMany(Pegawai::class, 'id_bagian', 'id_bagian');
  }
}
