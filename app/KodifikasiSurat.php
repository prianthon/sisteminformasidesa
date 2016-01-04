<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodifikasiSurat extends Model
{
    protected $fillable = ['kode_surat','nama_surat','parent_id'];
}
