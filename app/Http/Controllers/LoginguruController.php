<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loginguru;

class LoginguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nilai = Loginguru::all();
        return view('logguru.score_xii_3', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('logguru.createnilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nama = $request['nama'];
        $jk = $request['jk'];
        $kkm = $request['a'];
        $uh1 = $request['b'];
        $uh2 = $request['c'];
        $uh3 = $request['d'];
        $rata = $uh1+$uh2+$uh3;
        $jumlah = $rata/3;
        $uts = $request['f'];
        $uas = $request['g'];
        $rapot = $request['h'];


        $nilai = new Loginguru();
        $nilai->nama_siswa = $nama;
        $nilai->jenis_kelamin = $jk;
        $nilai->kkm = $kkm;
        $nilai->uh = $uh1;
        $nilai->uhh = $uh2;
        $nilai->uhhh = $uh3;
        $nilai->rataa = $jumlah;
        $nilai->uts = $uts;
        $nilai->uas = $uas;
        $nilai->raport = $rapot;
        $nilai->save();
        return redirect()->route('logguru.index')->with('alert-success', 'Data Berhasil Disimpan.'); 
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
        //
        $nilai = Loginguru::findOrFail($id);
        return view('logguru.editnilai', compact('nilai'));
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
        $nama = $request['nama'];
        $jk = $request['jk'];
        $kkm = $request['a'];
        $uh1 = $request['b'];
        $uh2 = $request['c'];
        $uh3 = $request['d'];
        $rata = $uh1+$uh2+$uh3;
        $jumlah = $rata/3;
        $uts = $request['f'];
        $uas = $request['g'];
        $rapot = $request['h'];


        $nilai = new Loginguru();
        $nilai->nama_siswa = $nama;
        $nilai->jenis_kelamin = $jk;
        $nilai->kkm = $kkm;
        $nilai->uh = $uh1;
        $nilai->uhh = $uh2;
        $nilai->uhhh = $uh3;
        $nilai->rataa = $jumlah;
        $nilai->uts = $uts;
        $nilai->uas = $uas;
        $nilai->raport = $rapot;
        $nilai->save();
        return redirect()->route('logguru.index')->with('alert-success', 'Data Berhasil Diubah.'); 
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
        Loginguru::destroy($id);
        return redirect()->route('logguru.index');
    }
}
