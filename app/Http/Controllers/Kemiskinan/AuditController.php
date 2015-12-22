<?php

namespace App\Http\Controllers\Kemiskinan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuditController extends Controller
{
    public function index()
    {
      return view('dashboard.kemiskinan.audit.index');
    }
}
