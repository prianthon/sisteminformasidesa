<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libperangkatjabatan extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'libperangkatjabatans';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['perangkat_jabatan'];

  public function perangkatdesa()
  {
    return $this->hasMany('App\PerangkatDesa','jabatan_id');
  }
}
