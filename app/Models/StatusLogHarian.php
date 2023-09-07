<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusLogHarian extends Model
{
  use HasFactory;
  protected $table = 'status_log_harian';
  protected $primaryKey = 'id_status_log_harian';
  protected $fillable = [
    'nama_status',
  ];

  public function log_harian(): HasMany
  {
    return $this->hasMany(Pegawai::class, 'status', 'id_status_log_harian');
  }
}
