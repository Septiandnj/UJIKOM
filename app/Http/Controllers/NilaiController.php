<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NilaiRequest;
use App\nilai;
use App\siswa;
use App\mapel;
use App\guru;
use Auth;
use DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_mapel = guru::where('id_user', Auth::user()->id)->first()->id_mapel;
        $mapel    = mapel::where('id',$id_mapel)->firstOrFail();
        $nilai    = DB::table('nilais')->join('siswas','siswas.id','=','nilais.id_siswa')->join('mapels','mapels.id','=','nilais.id_mapel')->select('nilais.*','siswas.nama_siswa','mapels.mapel')->where('mapels.id', $id_mapel)->get();
        return view('nilai.index', compact('nilai'));
    }

    public function nilais()
    {
        //
        $id_mapel = guru::where('id_user', Auth::user()->id)->first()->id_mapel;
        $mapel    = mapel::where('id',$id_mapel)->firstOrFail();
        $nilai    = DB::table('nilais')->join('siswas','siswas.id','=','nilais.id_siswa')->join('mapels','mapels.id','=','nilais.id_mapel')->select('nilais.*','siswas.nama_siswa','mapels.mapel')->where('mapels.id', $id_mapel)->get();
        return view('nilai.index2', compact('nilai'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa    = siswa::all();
        $id_mapel = guru::where('id_user', Auth::user()->id)->first()->id_mapel;
        $mapel    = mapel::where('id',$id_mapel)->firstOrFail();
        return view('nilai.create', compact('mapel','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NilaiRequest $request)
    {
        //  
        $siswa = $request['id_siswa'];
        $mapel = $request['id_mapel'];
        $kkm = $request['a'];
        $uh1 = $request['b'];
        $uh2 = $request['c'];
        $uh3 = $request['d'];
        $uh4 = $request['e'];
        $rata = $uh1+$uh2+$uh3+$uh4;
        $jumlah = $rata/4;
        $uts = $request['f'];
        $uas = $request['g'];


        $nilai = new nilai();
        $nilai->id_siswa = $siswa;
        $nilai->id_mapel = $mapel;
        $nilai->kkm = $kkm;
        $nilai->uh1 = $uh1;
        $nilai->uh2 = $uh2;
        $nilai->uh3 = $uh3;
        $nilai->uh4 = $uh4;
        $nilai->rataa = $jumlah;
        $nilai->uts = $uts;
        $nilai->uas = $uas;
        $nilai->save();

        return redirect()->route('nilai.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $siswa = siswa::all();
        $mapel= mapel::where('id', Auth::user()->id)->firstOrFail();
        $nilai = nilai::findOrFail($id);
        return view('nilai.show')->with(compact('nilai','siswa','mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswa = siswa::all();
        $mapel= mapel::where('id', Auth::user()->id)->firstOrFail();
        $nilai = nilai::findOrFail($id);
        return view('nilai.edit')->with(compact('nilai','siswa','mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nilai = nilai::findOrFail($id);
        $siswa = $request['id_siswa'];
        $mapel = $request['id_mapel'];
        $kkm = $request['a'];
        $uh1 = $request['b'];
        $uh2 = $request['c'];
        $uh3 = $request['d'];
        $uh4 = $request['e'];
        $rata = $uh1+$uh2+$uh3+$uh4;
        $jumlah = $rata/4;
        $uts = $request['f'];
        $uas = $request['g'];


        $nilai->id_siswa = $siswa;
        $nilai->id_mapel = $mapel;
        $nilai->kkm = $kkm;
        $nilai->uh1 = $uh1;
        $nilai->uh2 = $uh2;
        $nilai->uh3 = $uh3;
        $nilai->uh4 = $uh4;
        $nilai->rataa = $jumlah;
        $nilai->uts = $uts;
        $nilai->uas = $uas;
        $nilai->save();

            return redirect()->route('nilai.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        nilai::destroy($id);
        return redirect()->route('nilai.index');
    }
}
