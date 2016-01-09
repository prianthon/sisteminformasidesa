<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libkabupaten;
use App\Libprovinsi;
use App\Http\Requests\Libs\RegKabupatenRequest;

class PengaturanUmumRegKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libkabupaten = Libkabupaten::paginate(5);
        return view('dashboard.pengaturan.umum.libkabupaten.index', compact('libkabupaten'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $libkabupaten = Libkabupaten::where('nama_kabupaten','=',$keyword)->paginate(5) ;
      return view('dashboard.pengaturan.umum.libkabupaten.index', compact('libkabupaten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.umum.libkabupaten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegKabupatenRequest $request)
    {
      $data=$request->all();
      Libkabupaten::create($data);
      alert()->overlay('Selamat', 'Tambah Kode dan Nama Lib Kabupaten Berhasil!', 'success');
      return redirect('pengaturan/umum/libkabupaten');
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
      $libkabupaten = Libkabupaten::find($id);
      return view('dashboard.pengaturan.umum.libkabupaten.edit', compact('libkabupaten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegKabupatenRequest $request, $id)
    {
      $data=$request->all();
      $libkabupaten = Libkabupaten::find($id);
      $libkabupaten->update($data);
      alert()->overlay('Selamat', 'Ubah Kode dan Nama Lib Kabupaten Berhasil!', 'success');
      return redirect('pengaturan/umum/libkabupaten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libkabupaten = Libkabupaten::find($id);
      $libkabupaten->delete();
      alert()->overlay('Selamat', 'Hapus Kode dan Nama Lib Kabupaten Berhasil!', 'success');
      return redirect('pengaturan/umum/libkabupaten');
    }
}
