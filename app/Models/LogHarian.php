<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogHarian extends Model
{
  use HasFactory;
  protected $table = 'log_harian';
  protected $primaryKey = 'id_log_harian';
  protected $fillable = [
    'title',
    'body',
    'foto',
    'tanggal',
    'id_pegawai',
    'status',
  ];

  public function status(): BelongsTo
  {
    return $this->belongsTo(StatusLogHarian::class);
  }

  public function pegawai(): BelongsTo
  {
    return $this->belongsTo(Pegawai::class);
  }
}
