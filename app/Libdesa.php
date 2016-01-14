<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libdesa extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libdesas';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['kode_desa','nama_desa','kecamatan_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function libkecamatan()
  {
    return $this->belongsTo('App\Libkecamatan','kecamatan_id');
  }
}
