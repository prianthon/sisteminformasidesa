<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'pendidikans';

    protected $fillable = ['pendidikan'];
}
