<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengaturanUmumPerangkatDesaController extends Controller
{
  public function index()
  {
      $libjabatan = Libperangkatjabatan::paginate(5);
      return view('dashboard.pengaturan.perangkat.index', compact('libjabatan'));
  }

  public function cari(Request $request)
  {
    $keyword = $request['keyword'];
    $libjabatan = Libperangkatjabatan::where('perangkat_jabatan','=',$keyword)->paginate(5);
    return view('dashboard.pengaturan.perangkat.libjabatan.index', compact('libjabatan'));
  }
}
