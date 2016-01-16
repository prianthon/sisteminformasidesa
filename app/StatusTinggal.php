<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusTinggal extends Model
{
    # Tentukan nama tabel terkait
    protected $table = 'status_tinggals';

    protected $fillable = ['status_tinggal'];
}
