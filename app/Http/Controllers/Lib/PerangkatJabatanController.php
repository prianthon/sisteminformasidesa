<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libperangkatjabatan;
use App\Http\Requests\Libs\PerangkatJabatanRequest;

class PerangkatJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $libjabatan = Libperangkatjabatan::paginate(5);
       return view('dashboard.pengaturan.perangkat.libjabatan.index', compact('libjabatan'));
     }

     public function cari(Request $request)
     {
       $keyword = $request['keyword'];
       $libjabatan = Libperangkatjabatan::where('perangkat_jabatan','=',$keyword)->paginate(5);
       return view('dashboard.pengaturan.perangkat.libjabatan.index', compact('libjabatan'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.perangkat.libjabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerangkatJabatanRequest $request)
    {
      $data=$request->all();
      Libperangkatjabatan::create($data);
      alert()->overlay('Selamat', 'Tambah Jabatan Perangkat Berhasil!', 'success');
      return redirect('pengaturan/umum/perangkatjabatan');
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
      $libjabatan = Libperangkatjabatan::find($id);
      return view('dashboard.pengaturan.perangkat.libjabatan.edit', compact('libjabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerangkatJabatanRequest $request, $id)
    {
      $data=$request->all();
      $libjabatan = Libperangkatjabatan::find($id);
      $libjabatan->update($data);
      alert()->overlay('Selamat', 'Ubah Jabatan Perangkat Berhasil!', 'success');
      return redirect('pengaturan/umum/perangkatjabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libjabatan = Libperangkatjabatan::find($id);
      $libjabatan->delete();
      alert()->overlay('Selamat', 'Hapus Jabatan Perangkat Berhasil!', 'success');
      return redirect('pengaturan/umum/perangkatjabatan');
    }
}
