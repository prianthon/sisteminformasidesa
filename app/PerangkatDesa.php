<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'perangkatdesas';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['niap','nip','datapenduduk_id','jabatan_id','pangkat_golongan','no_tgl_keputusan_pengangkatan','no_tgl_keputusan_pemberhentian','keterangan'];

  # Relasi one-to-many provinsi ke kabupaten
  public function pendudukid()
  {
    return $this->belongsTo('App\Datapenduduk','datapenduduk_id');
  }

  public function jabatanid()
  {
    return $this->belongsTo('App\Libperangkatjabatan','jabatan_id');
  }
}
