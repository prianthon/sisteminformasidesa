<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengaturanUmumWilayahAdministratifController extends Controller
{
  public function index()
  {
      return view('dashboard.pengaturan.wilayah.index');
  }
}
