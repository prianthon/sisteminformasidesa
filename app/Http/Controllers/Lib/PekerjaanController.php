<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\Http\Requests\Libs\PekerjaanRequest;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = Pekerjaan::paginate(10);
        return view('dashboard.pustaka.pekerjaan.index', compact('pekerjaan'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $pekerjaan = Pekerjaan::where('pekerjaan','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.pekerjaan.index', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PekerjaanRequest $request)
    {
      $data=$request->all();
      Pekerjaan::create($data);
      return redirect('pekerjaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pekerjaan = Pekerjaan::find($id);
      return view('dashboard.pustaka.pekerjaan.edit', compact('pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PekerjaanRequest $request, $id)
    {
      $data=$request->all();
      $pekerjaan = Pekerjaan::find($id);
      $pekerjaan->update($data);
      return redirect('pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pekerjaan = Pekerjaan::find($id);
      $pekerjaan->delete();
      return redirect('pekerjaan');
    }
}
