<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libnegarapenempatan;
use App\PenyalurTki;
use App\Http\Requests\Libs\RegProvinsiRequest;

class PengaturanUmumRegNegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $libnegarapenempatan = Libnegarapenempatan::paginate(5);
      return view('dashboard.pengaturan.umum.libnegara.index', compact('libnegarapenempatan'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $libnegarapenempatan = Libnegarapenempatan::where('nama_negara','=',$keyword)->paginate(5) ;
      return view('dashboard.pengaturan.umum.libnegara.index', compact('libnegarapenempatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.umum.libnegara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegNegaraRequest $request)
    {
      $data=$request->all();
      Libnegarapenempatan::create($data);
      alert()->overlay('Selamat', 'Tambah Kode dan Nama Lib Negara Berhasil!', 'success');
      return redirect('pengaturan/umum/libnegara');
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
      $libnegarapenempatan = Libnegarapenempatan::find($id);
      return view('dashboard.pengaturan.umum.libnegara.edit', compact('libnegarapenempatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegNegaraRequest $request, $id)
    {
      $data=$request->all();
      $libnegarapenempatan = Libnegarapenempatan::find($id);
      $libnegarapenempatan->update($data);
      alert()->overlay('Selamat', 'Ubah Kode dan Nama Lib Negara Berhasil!', 'success');
      return redirect('pengaturan/umum/libnegara');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $libnegarapenempatan = Libnegarapenempatan::find($id);
      $libnegarapenempatan->delete();
      alert()->overlay('Selamat', 'Hapus Kode dan Nama Lib Negara Berhasil!', 'success');
      return redirect('pengaturan/umum/libnegara');
    }
}
