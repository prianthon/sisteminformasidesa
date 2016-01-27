<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibIstilahDusun extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libistilahdusuns';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['istilah_dusun'];
}
