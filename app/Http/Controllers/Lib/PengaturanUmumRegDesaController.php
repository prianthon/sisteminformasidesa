<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libdesa;
use App\Libkecamatan;
use App\Http\Requests\Libs\RegDesaRequest;

class PengaturanUmumRegDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libdesa = Libdesa::paginate(5);
        return view('dashboard.pengaturan.umum.libdesa.index', compact('libdesa'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $libdesa = Libdesa::where('nama_desa','=',$keyword)->paginate(5) ;
      return view('dashboard.pengaturan.umum.libdesa.index', compact('libdesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.umum.libdesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegDesaRequest $request)
    {
      $data=$request->all();
      Libdesa::create($data);
      alert()->overlay('Selamat', 'Tambah Kode dan Nama Lib Desa Berhasil!', 'success');
      return redirect('pengaturan/umum/libdesa');
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
      $libdesa = Libdesa::find($id);
      return view('dashboard.pengaturan.umum.libdesa.edit', compact('libdesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegDesaRequest $request, $id)
    {
      $data=$request->all();
      $libdesa = Libdesa::find($id);
      $libdesa->update($data);
      alert()->overlay('Selamat', 'Ubah Kode dan Nama Lib Desa Berhasil!', 'success');
      return redirect('pengaturan/umum/libdesa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libdesa = Libdesa::find($id);
      $libdesa->delete();
      alert()->overlay('Selamat', 'Hapus Kode dan Nama Lib Desa Berhasil!', 'success');
      return redirect('pengaturan/umum/libdesa');
    }
}
