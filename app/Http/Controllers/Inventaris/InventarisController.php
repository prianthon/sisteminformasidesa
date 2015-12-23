<?php

namespace App\Http\Controllers\Inventaris;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InventarisController extends Controller
{
    public function index()
    {
      return view('dashboard.inventaris.inventaris.index');
    }
}
