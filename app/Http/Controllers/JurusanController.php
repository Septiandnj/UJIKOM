<?php

namespace App\Http\Controllers;

use App\jurusan;
use Illuminate\Http\Request;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $jurusans = jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.create');
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
        $this->validate($request,[
            'jurusan'=>'required']);
            $jurusans =  new jurusan();
            $jurusans->jurusan = $request->jurusan;
            $jurusans->save();
            return redirect()->route('jurusan.index')->with('alert-success', 'Data Berhasil Disimpan.'); 
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
        $jurusans = jurusan::findOrFail($id);
        return view('jurusan.edit')->with(compact('jurusans'));
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
        $jurusans = jurusan::findOrFail($id);
        $jurusans->jurusan=$request->jurusan;
        $jurusans->save();
        return redirect()->route('jurusan.index')->with('alert-success', 'Data Berhasil Diubah.');
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
        jurusan::destroy($id);
        return redirect()->route('jurusan.index');
    }
}
