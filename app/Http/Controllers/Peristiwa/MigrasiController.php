<?php

namespace App\Http\Controllers\Peristiwa;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MigrasiController extends Controller
{
    public function index()
    {
      return view('dashboard.peristiwa.migrasi.index');
    }
}
