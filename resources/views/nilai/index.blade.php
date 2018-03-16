@extends('layouts.master')
@section('nav')
                <div class="logo">
                    <label class="simple-text">
                        Guru Informasi
                    </label>
                </div>

                <ul class="nav">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                
                    <li>
                        <a href="{{ route('nilai.index') }}">
                            <i class="pe-7s-id"></i>
                            <p>Data Nilai Siswa</p>
                        </a>
                    </li>
            </ul>
        </div>

@endsection

@section('profil')
    <li>
        <a href="{{ url('/settings/profile') }}">
            <i class="pe-7s-config"></i> Profil
        </a> 
    </li>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Kelas
                </div>
                <div class="panel-body">
                @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    @role('guru')
                    <a href="{{route('nilai.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    @endrole
                    <table class="table table-hover">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>UH1</th>
                                <th>UH2</th>
                                <th>UH3</th>
                                <th>UH4</th>
                                <th>Rata-Rata</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                @role('guru')
                                <th colspan="2">action</th>
                                @endrole
                             </tr>
                        @foreach ($nilai as $data)
                        <tr>
                            <td>{{$data->nama_siswa}}</td>
                            <td>{{$data->mapel}}</td>
                            <td>{{$data->kkm}}</td>
                            <td>{{$data->uh1}}</td>
                            <td>{{$data->uh2}}</td>
                            <td>{{$data->uh3}}</td>
                            <td>{{$data->uh4}}</td>
                            <td>{{$data->rataa}}</td>
                            <td>{{$data->uts}}</td>
                            <td>{{$data->uas}}</td>
                        <td>
                                <form method="POST" action="{{ route('nilai.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    @role('guru')
                                    <a href="{{route('nilai.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                    @endrole
                                </form>
                            </td>
                      </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection