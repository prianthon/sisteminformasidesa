<?php

namespace App\Http\Controllers\Pertanahan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PetaController extends Controller
{
    public function index()
    {
      return view('dashboard.pertanahan.peta.index');
    }
}
