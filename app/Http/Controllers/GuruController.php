<?php

namespace App\Http\Controllers;

use App\guru;
use App\mapel;
use App\kelas;
use App\Role;
use App\User;
use App\Http\Requests\GuruRequest;
use Illuminate\Http\Request;
use DB;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $gurus = DB::table('gurus')->join('mapels','gurus.id_mapel','=','mapels.id')->select('gurus.*', 'mapels.mapel')->get();
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=kelas::all();
        $mapel = mapel::all();
        return view('guru.create', compact('kelas','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuruRequest $request)
    {
        //
            $user= new User();
            $user->name = $request->nama_guru;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
            $user->is_verified = 1;
            $user->save();
            $guruRole = Role::where('name', 'guru')->first();
            $user->attachRole($guruRole);

            $gurus =  new guru();
            $gurus->id_user = $user->id;
            $gurus->nipg = $request->nipg;
            if ($request->hasfile('foto')) {
                $guru = $request->file('foto');
                $extension = $guru->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $guru->move($destinationPath, $filename);
                $gurus->foto = $filename; 
            }
            foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }
            $gurus->nama_guru = $request->nama_guru;
            $gurus->jenis_kelamin = $request->jenis_kelamin;
            $gurus->tanggal_lahir = $request->tanggal_lahir;
            $gurus->kelas = $data;
            $gurus->id_mapel = $request->id_mapel;
            $gurus->alamat = $request->alamat;
            $gurus->no_telepon = $request->no_telepon;
            $gurus->email = $request->email;
            $gurus->password = $request->password;
            $gurus->save();

            return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Ditambah.');
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
        $urug=kelas::all();
        $mapel=mapel::all();
        $gurus=guru::find($id);
        return view('guru.show', compact('urug', 'gurus', 'mapel'));
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
        $gurus = guru::findOrFail($id);
        $mapel = mapel::all();
        $kelas=kelas::all();
        return view('guru.edit', compact('gurus','mapel','kelas'));
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
            
            $gurus =  guru::findOrFail($id);
            $mapel = mapel::all();

            $user= User::findOrFail($request->id_user);
            $user->name = $request->nama_guru;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
            $user->is_verified = 1;
            $user->save();

            $gurus->nipg = $request->nipg;
            $gurus->foto = $request->foto;
            if ($request->hasfile('foto')) {
                $guru = $request->file('foto');
                $extension = $guru->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $guru->move($destinationPath, $filename);
                $gurus->foto = $filename; 
            }
            foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }
            $gurus->nama_guru = $request->nama_guru;
            $gurus->jenis_kelamin = $request->jenis_kelamin;
            $gurus->tanggal_lahir = $request->tanggal_lahir;
            $gurus->kelas = $data;
            $gurus->id_mapel = $request->id_mapel;
            $gurus->alamat = $request->alamat;
            $gurus->no_telepon = $request->no_telepon;
            $gurus->email = $request->email;
            $gurus->password = $request->password;
            $gurus->save();
         return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Diubah.');
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
        {
                $guru = guru::where('id_user',$id)->first();
                $guru->delete();

                User::destroy($id);

            return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Dihapus.');
        }
    
}
