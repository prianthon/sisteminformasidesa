<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PerangkatDesa;
use App\Datapenduduk;
use App\Libperangkatjabatan;
use App\Http\Requests\BukanLibs\PerangkatDesaRequest;

class PengaturanUmumPerangkatDesaController extends Controller
{
  public function index()
  {
      $perangkatdesa = PerangkatDesa::paginate(5);
      return view('dashboard.pengaturan.perangkat.desa.index', compact('perangkatdesa'));
  }

  public function create()
  {
      return view('dashboard.pengaturan.perangkat.desa.create');
  }
}
