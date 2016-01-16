<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'agamas';

    protected $fillable = ['agama'];
}
