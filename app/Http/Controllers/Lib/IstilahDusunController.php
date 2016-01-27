<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LibIstilahDusun;
use App\Http\Requests\Libs\RegIstilahRequest;

class IstilahDusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $libistilah = LibIstilahDusun::paginate(5);
       return view('dashboard.pengaturan.wilayah.libistilahdusun.index', compact('libistilah'));
     }

     public function cari(Request $request)
     {
       $keyword = $request['keyword'];
       $libistilah = LibIstilahDusun::where('istilah_dusun','=',$keyword)->paginate(5);
       return view('dashboard.pengaturan.wilayah.libistilahdusun.index', compact('libistilah'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.wilayah.libistilahdusun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegIstilahRequest $request)
    {
      $data=$request->all();
      LibIstilahDusun::create($data);
      alert()->overlay('Selamat', 'Tambah Istilah Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libistilahdusun');
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
      $libistilah = LibIstilahDusun::find($id);
      return view('dashboard.pengaturan.wilayah.libistilahdusun.edit', compact('libistilah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegIstilahRequest $request, $id)
    {
      $data=$request->all();
      $libistilah = LibIstilahDusun::find($id);
      $libistilah->update($data);
      alert()->overlay('Selamat', 'Ubah Istilah Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libistilahdusun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libistilah = LibIstilahDusun::find($id);
      $libistilah->delete();
      alert()->overlay('Selamat', 'Hapus Istilah Dusun Berhasil!', 'success');
      return redirect('pengaturan/umum/libistilahdusun');
    }
}
