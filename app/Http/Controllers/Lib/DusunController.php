<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Datapenduduk;
use App\Libdusun;
use App\Librw;
use App\Http\Requests\Libs\RegDusunRequest;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $libdusun = Libdusun::paginate(5);
       return view('dashboard.pengaturan.wilayah.libdusun.index', compact('libdusun'));
     }

     public function cari(Request $request)
     {
       $keyword = $request['keyword'];
       $libdusun = Libdusun::where('nama_dusun','=',$keyword)->paginate(5);
       return view('dashboard.pengaturan.wilayah.libdusun.index', compact('libdusun'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.wilayah.libdusun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegDusunRequest $request)
    {
      $data=$request->all();
      Libdusun::create($data);
      alert()->overlay('Selamat', 'Tambah Nama Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libdusun');
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
      $libdusun = Libdusun::find($id);
      return view('dashboard.pengaturan.wilayah.libdusun.edit', compact('libdusun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegDusunRequest $request, $id)
    {
      $data=$request->all();
      $libdusun = Libdusun::find($id);
      $libdusun->update($data);
      alert()->overlay('Selamat', 'Ubah Nama Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libdusun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libdusun = Libdusun::find($id);
      $libdusun->delete();
      alert()->overlay('Selamat', 'Hapus Nama Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libdusun');
    }
}
