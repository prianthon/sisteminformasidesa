<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StatusTinggal;
use App\Http\Requests\Libs\StatusTinggalRequest;

class StatusTinggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_tinggal = StatusTinggal::paginate(10);
        return view('dashboard.pustaka.statustinggal.index', compact('status_tinggal'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $status_tinggal = StatusTinggal::where('status_tinggal','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.statustinggal.index', compact('status_tinggal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pustaka.statustinggal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusTinggalRequest $request)
    {
      $data=$request->all();
      StatusTinggal::create($data);
      alert()->overlay('Selamat', 'Tambah Status Tinggal Berhasil!', 'success');
      return redirect('status/tinggal');
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
      $status_tinggal = StatusTinggal::find($id);
      return view('dashboard.pustaka.statustinggal.edit', compact('status_tinggal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusTinggalRequest $request, $id)
    {
      $data=$request->all();
      $status_tinggal = StatusTinggal::find($id);
      $status_tinggal->update($data);
      alert()->overlay('Selamat', 'Ubah Status Tinggal Berhasil!', 'success');
      return redirect('status/tinggal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $status_tinggal = StatusTinggal::find($id);
      $status_tinggal->delete();
      alert()->overlay('Selamat', 'Hapus Status Tinggal Berhasil!', 'success');
      return redirect('status/tinggal');
    }
}
