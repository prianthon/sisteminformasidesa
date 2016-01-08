<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HubunganKeluarga;
use App\Http\Requests\Libs\HubunganKeluargaRequest;

class HubunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hubungan_keluarga = HubunganKeluarga::paginate(10);
      return view('dashboard.pustaka.hubungan.index', compact('hubungan_keluarga'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $hubungan_keluarga = HubunganKeluarga::where('hubungan_keluarga','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.hubungan.index', compact('hubungan_keluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.hubungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HubunganKeluargaRequest $request)
    {
      $data=$request->all();
      HubunganKeluarga::create($data);
      alert()->overlay('Selamat', 'Tambah Hubungan Keluarga Berhasil!', 'success');
      return redirect('hubungan');
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
      $hubungan_keluarga = HubunganKeluarga::find($id);
      return view('dashboard.pustaka.hubungan.edit', compact('hubungan_keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HubunganKeluargaRequest $request, $id)
    {
      $data=$request->all();
      $hubungan_keluarga = HubunganKeluarga::find($id);
      $hubungan_keluarga->update($data);
      alert()->overlay('Selamat', 'Ubah Hubungan Keluarga Berhasil!', 'success');
      return redirect('hubungan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hubungan_keluarga = HubunganKeluarga::find($id);
      $hubungan_keluarga->delete();
      alert()->overlay('Selamat', 'Hapus Hubungan Keluarga Berhasil!', 'success');
      return redirect('hubungan');
    }
}
