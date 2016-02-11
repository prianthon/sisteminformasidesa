<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapenduduk extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'datapenduduks';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nik','nama','tempat_lahir','tanggal_lahir','kewarganegaraan','foto','jeniskelamin_id','golongandarah_id','agama_id','statuskawin_id','statustinggal_id','pendidikan_id','pekerjaan_id','cacat_id','statuskependudukan_id'];

  # Relasi one-to-many provinsi ke kabupaten
  public function libdusun()
  {
    return $this->hasMany('App\Libdusun','penduduk_kadus_id');
  }

  # Relasi one-to-many provinsi ke kabupaten
  public function librw()
  {
    return $this->hasMany('App\Librw','penduduk_ketuarw_id');
  }

  # Relasi one-to-many provinsi ke kabupaten
  public function librt()
  {
    return $this->hasMany('App\Librt','penduduk_ketuart_id');
  }

  public function perangkatdesa()
  {
    return $this->hasMany('App\PerangkatDesa','datapenduduk_id');
  }
}
