<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentSurat extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'parent_surats';

    # MASS ASSIGNMENT
	  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['kode_parent','nama_parent'];

    public function kodifikasisurat()
    {
      return $this->hasMany('App\KodifikasiSurat', 'parent_id');
    }
}
