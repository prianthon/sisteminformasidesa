<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libkecamatan;
use App\Libkabupaten;
use App\Http\Requests\Libs\RegKecamatanRequest;

class PengaturanUmumRegKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $libkecamatan = Libkecamatan::paginate(5);
      return view('dashboard.pengaturan.umum.libkecamatan.index', compact('libkecamatan'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $libkecamatan = Libkecamatan::where('nama_kecamatan','=',$keyword)->paginate(5) ;
      return view('dashboard.pengaturan.umum.libkecamatan.index', compact('libkecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.umum.libkecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegKecamatanRequest $request)
    {
      $data=$request->all();
      Libkecamatan::create($data);
      alert()->overlay('Selamat', 'Tambah Kode dan Nama Lib Kecamatan Berhasil!', 'success');
      return redirect('pengaturan/umum/libkecamatan');
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
      $libkecamatan = Libkecamatan::find($id);
      return view('dashboard.pengaturan.umum.libkecamatan.edit', compact('libkecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegKecamatanRequest $request, $id)
    {
      $data=$request->all();
      $libkecamatan = Libkecamatan::find($id);
      $libkecamatan->update($data);
      alert()->overlay('Selamat', 'Ubah Kode dan Nama Lib Kecamatan Berhasil!', 'success');
      return redirect('pengaturan/umum/libkecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libkecamatan = Libkecamatan::find($id);
      $libkecamatan->delete();
      alert()->overlay('Selamat', 'Hapus Kode dan Nama Lib Kecamatan Berhasil!', 'success');
      return redirect('pengaturan/umum/libkecamatan');
    }
}
