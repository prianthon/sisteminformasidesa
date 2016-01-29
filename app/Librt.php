<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librt extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'librts';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nomor_rt','librw_id','penduduk_ketuart_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function datapenduduk()
  {
    return $this->belongsTo('App\DataPenduduk','penduduk_ketuart_id');
  }

  public function librw()
  {
    return $this->belongsTo('App\Librw','librw_id');
  }
}
