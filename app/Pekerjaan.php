<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'pekerjaans';

    protected $fillable = ['pekerjaan','tipe'];
}
