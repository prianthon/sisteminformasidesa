<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StatusKawin;
use App\Http\Requests\Libs\StatusKawinRequest;

class StatusKawinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_kawin = StatusKawin::paginate(10);
        return view('dashboard.pustaka.statuskawin.index', compact('status_kawin'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $status_kawin = StatusKawin::where('status_kawin','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.statuskawin.index', compact('status_kawin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.statuskawin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusKawinRequest $request)
    {
      $data=$request->all();
      StatusKawin::create($data);
      alert()->overlay('Selamat', 'Tambah Status Kawin Berhasil!', 'success');
      return redirect('status/kawin');
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
      $status_kawin = StatusKawin::find($id);
      return view('dashboard.pustaka.statuskawin.edit', compact('status_kawin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusKawinRequest $request, $id)
    {
      $data=$request->all();
      $status_kawin = StatusKawin::find($id);
      $status_kawin->update($data);
      alert()->overlay('Selamat', 'Ubah Status Kawin Berhasil!', 'success');
      return redirect('status/kawin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $status_kawin = StatusKawin::find($id);
      $status_kawin->delete();
      alert()->overlay('Selamat', 'Hapus Status Kawin Berhasil!', 'success');
      return redirect('status/kawin');
    }
}
