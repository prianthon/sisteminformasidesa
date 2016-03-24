<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KeluargaController extends Controller
{
    public function index()
    {
      return view('dashboard.keluarga.index');
    }

    public function satu()
    {
      return view('dashboard.keluarga.satu');
    }

    public function dua()
    {
      return view('dashboard.keluarga.dua');
    }
}
