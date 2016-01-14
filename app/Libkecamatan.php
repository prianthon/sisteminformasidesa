<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libkecamatan extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libkecamatans';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['kode_kecamatan','nama_kecamatan','kabupaten_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function libkabupaten()
  {
    return $this->belongsTo('App\Libkabupaten','kabupaten_id');
  }

  public function libdesa()
  {
    return $this->hasMany('App\Libdesa','kecamatan_id');
  }
}
