<?php

namespace App\Http\Controllers;

use App\mapel;
use Illuminate\Http\Request;
use Alert;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $mapels = mapel::all();
        return view('mapel.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mapel.create');
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
            'mapel'=>'required']);
            $mapels =  new mapel();
            $mapels->mapel = $request->mapel;
            $mapels->save();
            // Alert::success('Menambah Data', 'Berhasil')->autoclose(2000);
            // return redirect()->route('mapel.index');
            return redirect()->route('mapel.index')->with('alert-success', 'Data Berhasil Disimpan.'); 
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
        $mapels = mapel::findOrFail($id);
        return view('mapel.edit')->with(compact('mapels'));
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
        $mapels = mapel::findOrFail($id);
        $mapels->mapel=$request->mapel;
        $mapels->save();
        return redirect()->route('mapel.index')->with('alert-success', 'Data Berhasil Diubah.');
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
        mapel::destroy($id);
        return redirect()->route('mapel.index');
    }
}
