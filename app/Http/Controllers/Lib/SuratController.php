<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KodifikasiSurat;
use App\ParentSurat;
use App\User;
use App\Http\Requests\Libs\KodifikasiSuratRequest;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_surat = ParentSurat::all();
        $kodifikasi_surat = KodifikasiSurat::paginate(10);
        return view('dashboard.pustaka.surat.index', compact('kodifikasi_surat'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $kodifikasi_surat = KodifikasiSurat::where('kode_surat','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.surat.index', compact('kodifikasi_surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KodifikasiSuratRequest $request)
    {
      $data=$request->all();
      KodifikasiSurat::create($data);
      return redirect('surat');
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
      $kodifikasi_surat = KodifikasiSurat::find($id);
      return view('dashboard.pustaka.surat.edit', compact('kodifikasi_surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KodifikasiSuratRequest $request, $id)
    {
      $data=$request->all();
      $kodifikasi_surat = KodifikasiSurat::find($id);
      $kodifikasi_surat->update($data);
      return redirect('surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kodifikasi_surat = KodifikasiSurat::find($id);
      $kodifikasi_surat->delete();
      return redirect('surat');
    }
}
