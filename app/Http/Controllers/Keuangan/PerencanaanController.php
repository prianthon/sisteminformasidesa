<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PerencanaanController extends Controller
{
    public function index()
    {
      return view('dashboard.keuangan.perencanaan.index');
    }
}
