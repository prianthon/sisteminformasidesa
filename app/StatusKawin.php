<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusKawin extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'status_kawins';

    protected $fillable = ['status_kawin'];
}
