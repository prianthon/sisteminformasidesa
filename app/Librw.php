<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librw extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'librws';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nama_dusun','penduduk_kadus_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function datapenduduk()
  {
    return $this->belongsTo('App\DataPenduduk','penduduk_kadus_id');
  }
}
