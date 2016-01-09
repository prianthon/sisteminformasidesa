<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libkabupaten extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libkabupatens';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['kode_kabupaten','nama_kabupaten','provinsi_id'];

  # Relasi one-to-many provinsi ke kabupateN
  public function libprovinsi()
  {
    return $this->belongsTo('App\Libprovinsi','provinsi_id');
  }
}
