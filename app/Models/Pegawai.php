<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pegawai extends Authenticatable
{
  use HasFactory, HasApiTokens, Notifiable;
  protected $table = 'pegawai';
  protected $primaryKey = 'id_pegawai';
  protected $guard = 'pegawai';
  protected $fillable = [
    'password',
    'email',
    'nama_pegawai',
    'id_dinas',
    'id_bagian',
    'jabatan',
  ];

  protected $hidden = [
    'password'
  ];

  public function dinas(): BelongsTo
  {
    return $this->belongsTo(Dinas::class, 'id_dinas', 'id_dinas');
  }

  public function bagian(): BelongsTo
  {
    return $this->belongsTo(Bagian::class, 'id_bagian', 'id_bagian');
  }

  public function jabatan_method(): BelongsTo
  {
    return $this->belongsTo(Jabatan::class, 'jabatan', 'id_jabatan');
  }

  public function log_harian(): HasMany
  {
    return $this->hasMany(LogHarian::class, 'id_pegawai', 'id_pegawai');
  }
}
