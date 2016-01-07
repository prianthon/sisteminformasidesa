<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodifikasiSurat extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'kodifikasi_surats';

    # MASS ASSIGNMENT
	  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['kode_surat','nama_surat','parent_id'];

    public function parentsurat()
    {
      return $this->belongsTo('App\ParentSurat', 'parent_id');
    }
}
