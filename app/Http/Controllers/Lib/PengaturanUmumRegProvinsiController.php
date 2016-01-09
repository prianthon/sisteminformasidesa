<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libprovinsi;
use App\Libkabupaten;
use App\Http\Requests\Libs\RegProvinsiRequest;

class PengaturanUmumRegProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $libprovinsi = Libprovinsi::paginate(5);
      return view('dashboard.pengaturan.umum.libprovinsi.index', compact('libprovinsi'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $libprovinsi = Libprovinsi::where('nama_provinsi','=',$keyword)->paginate(5) ;
      return view('dashboard.pengaturan.umum.libprovinsi.index', compact('libprovinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.umum.libprovinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegProvinsiRequest $request)
    {
      $data=$request->all();
      Libprovinsi::create($data);
      alert()->overlay('Selamat', 'Tambah Kode dan Nama Lib Provinsi Berhasil!', 'success');
      return redirect('pengaturan/umum/libprovinsi');
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
      $libprovinsi = Libprovinsi::find($id);
      return view('dashboard.pengaturan.umum.libprovinsi.edit', compact('libprovinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegProvinsiRequest $request, $id)
    {
      $data=$request->all();
      $libprovinsi = Libprovinsi::find($id);
      $libprovinsi->update($data);
      alert()->overlay('Selamat', 'Ubah Kode dan Nama Lib Provinsi Berhasil!', 'success');
      return redirect('pengaturan/umum/libprovinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libprovinsi = Libprovinsi::find($id);
      $libprovinsi->delete();
      alert()->overlay('Selamat', 'Hapus Kode dan Nama Lib Provinsi Berhasil!', 'success');
      return redirect('pengaturan/umum/libprovinsi');
    }
}
