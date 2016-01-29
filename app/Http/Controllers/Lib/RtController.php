<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Datapenduduk;
use App\Librt;
use App\Librw;
use App\Http\Requests\Libs\RegRtRequest;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $librt = Librt::paginate(5);
       return view('dashboard.pengaturan.wilayah.librt.index', compact('librt'));
     }

     public function cari(Request $request)
     {
       $keyword = $request['keyword'];
       $librt = Librt::where('nomor_rt','=',$keyword)->paginate(5);
       return view('dashboard.pengaturan.wilayah.librt.index', compact('librt'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.wilayah.librt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegRtRequest $request)
    {
      $data=$request->all();
      Librt::create($data);
      alert()->overlay('Selamat', 'Tambah RT Berhasil!', 'success');
      return redirect('pengaturan/umum/librt');
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
      $librt = Librt::find($id);
      return view('dashboard.pengaturan.wilayah.librt.edit', compact('librt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegRtRequest $request, $id)
    {
      $data=$request->all();
      $librt = Librt::find($id);
      $librt->update($data);
      alert()->overlay('Selamat', 'Ubah RT Berhasil!', 'success');
      return redirect('pengaturan/umum/librt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $librt = Librt::find($id);
      $librt->delete();
      alert()->overlay('Selamat', 'Hapus RT Berhasil!', 'success');
      return redirect('pengaturan/umum/librt');
    }
}
