<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenyalurTki extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'penyalur_tkis';

    protected $fillable = ['nama_pptkis','penanggung_jawab','nomor_pptkis','tanggal_izin','nomor_telepon','nomor_fax','alamat_kantor','alamat_penampungan','email','website','negarapenempatan_id','anggota_assosiasi','kantor_cabang','provinsi_id'];

    public function libnegara()
    {
      return $this->hasMany('App\Libnegara','negarapenempatan_id');
    }
}
