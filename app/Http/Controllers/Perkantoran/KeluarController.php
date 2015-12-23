<?php

namespace App\Http\Controllers\Perkantoran;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KeluarController extends Controller
{
    public function index()
    {
      return view('dashboard.perkantoran.suratkeluar.index');
    }
}
