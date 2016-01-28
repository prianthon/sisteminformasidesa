<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libdusun extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libdusuns';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nama_dusun','penduduk_kadus_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function librw()
  {
    return $this->hasMany('App\Librw','penduduk_kadus_id');
  }
}
