<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PenyalurTki;
use App\Http\Requests\Libs\PenyalurTkiRequest;

class PenyalurTkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $penyalur_tkis = PenyalurTki::paginate(10);
      return view('dashboard.pustaka.penyalurtki.index', compact('penyalur_tkis'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $penyalur_tkis = PenyalurTki::where('nama_pptkis','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.penyalurtki.index', compact('penyalur_tkis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.penyalurtki.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenyalurTkiRequest $request)
    {
      $data=$request->all();
      PenyalurTki::create($data);
      return redirect('penyalur/tki');
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
      $penyalur_tkis = PenyalurTki::find($id);
      return view('dashboard.pustaka.penyalurtki.edit', compact('penyalur_tkis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PenyalurTkiRequest $request, $id)
    {
      $data=$request->all();
      $penyalur_tkis = PenyalurTki::find($id);
      $penyalur_tkis->update($data);
      return redirect('penyalur/tki');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $penyalur_tkis = PenyalurTki::find($id);
      $penyalur_tkis->delete();
      return redirect('penyalur/tki');
    }
}
