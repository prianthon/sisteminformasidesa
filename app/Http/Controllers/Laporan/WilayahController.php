<?php

namespace App\Http\Controllers\Laporan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WilayahController extends Controller
{
    public function index()
    {
      return view('dashboard.laporan.wilayah.index');
    }
}
