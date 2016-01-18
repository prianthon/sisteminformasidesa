<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libnegarapenempatan extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libnegarapenempatans';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['kode_negara','nama_negara'];

  # Relasi one-to-many provinsi ke kabupaten
  public function penyalurtki()
  {
    return $this->belongsTo('App\PenyalurTki','negarapenempatan_id');
  }
}
