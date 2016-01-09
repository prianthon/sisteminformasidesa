<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libprovinsi extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libprovinsis';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['kode_provinsi','nama_provinsi'];

  # Relasi one-to-many provinsi ke kabupaten
  public function libkabupaten()
  {
    return $this->hasMany('App\Libkabupaten','provinsi_id');
  }
}
