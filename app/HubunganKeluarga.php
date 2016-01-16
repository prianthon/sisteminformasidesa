<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HubunganKeluarga extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'hubungan_keluargas';

    protected $fillable = ['hubungan_keluarga'];
}
