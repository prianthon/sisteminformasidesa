<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProgramPemerintahController extends Controller
{
    public function index()
    {
      return view('dashboard.pelayanan.programpemerintah.index');
    }
}
