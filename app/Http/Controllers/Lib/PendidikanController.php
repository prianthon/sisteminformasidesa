<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pendidikan;
use App\Http\Requests\Libs\PendidikanRequest;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::paginate(10);
        return view('dashboard.pustaka.pendidikan.index', compact('pendidikan'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $pendidikan = Pendidikan::where('pendidikan','=',$keyword)->paginate(10) ;
      return view('dashboard.pustaka.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pustaka.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendidikanRequest $request)
    {
      $data=$request->all();
      Pendidikan::create($data);
      return redirect('pendidikan');
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
      $pendidikan = Pendidikan::find($id);
      return view('dashboard.pustaka.pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PendidikanRequest $request, $id)
    {
      $data=$request->all();
      $pendidikan = Pendidikan::find($id);
      $pendidikan->update($data);
      return redirect('pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pendidikan = Pendidikan::find($id);
      $pendidikan->delete();
      return redirect('pendidikan');
    }
}
