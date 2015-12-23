<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PenganggaranController extends Controller
{
    public function index()
    {
      return view('dashboard.keuangan.penganggaran.index');
    }
}
