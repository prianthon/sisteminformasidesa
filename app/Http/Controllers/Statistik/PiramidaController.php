<?php

namespace App\Http\Controllers\Statistik;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PiramidaController extends Controller
{
    public function index()
    {
      return view('dashboard.statistik.piramida.index');
    }
}
