<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KodifikasiController extends Controller
{
    public function index()
    {
      return view('dashboard.keuangan.kodifikasi.index');
    }
}
