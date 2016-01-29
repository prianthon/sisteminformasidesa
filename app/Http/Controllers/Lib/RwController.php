<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Datapenduduk;
use App\Libdusun;
use App\Librw;
use App\Http\Requests\Libs\RegRwRequest;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $librw = Librw::paginate(5);
       return view('dashboard.pengaturan.wilayah.librw.index', compact('librw'));
     }

     public function cari(Request $request)
     {
       $keyword = $request['keyword'];
       $librw = Librw::where('nomor_rw','=',$keyword)->paginate(5);
       return view('dashboard.pengaturan.wilayah.librw.index', compact('librw'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.wilayah.librw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegRwRequest $request)
    {
      $data=$request->all();
      Librw::create($data);
      alert()->overlay('Selamat', 'Tambah RW Berhasil!', 'success');
      return redirect('pengaturan/umum/librw');
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
      $librw = Librw::find($id);
      return view('dashboard.pengaturan.wilayah.librw.edit', compact('librw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegRwRequest $request, $id)
    {
      $data=$request->all();
      $librw = Librw::find($id);
      $librw->update($data);
      alert()->overlay('Selamat', 'Ubah RW Berhasil!', 'success');
      return redirect('pengaturan/umum/librw');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $librw = Librw::find($id);
      $librw->delete();
      alert()->overlay('Selamat', 'Hapus RW Berhasil!', 'success');
      return redirect('pengaturan/umum/librw');
    }
}
