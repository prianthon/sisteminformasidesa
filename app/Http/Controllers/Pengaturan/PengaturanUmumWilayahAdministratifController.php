<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Datapenduduk;
use App\Libdusun;
use App\Librw;
use App\Librt;

class PengaturanUmumWilayahAdministratifController extends Controller
{
  public function index()
  {
    $libwilayah = Librw::paginate(5);
    return view('dashboard.pengaturan.wilayah.index', compact('librw'));
  }

  public function cari(Request $request)
  {
    $keyword = $request['keyword'];
    $librw = Librw::where('nomor_rw','=',$keyword)->paginate(5);
    return view('dashboard.pengaturan.wilayah.librw.index', compact('librw'));
  }
}
