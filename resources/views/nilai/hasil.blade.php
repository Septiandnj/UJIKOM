@extends('layouts.master')
@section('nav')

            <div class="logo">
                <label class="simple-text">
                    Admin Informasi
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
                    <a href="{{ route('guru.index') }}">
                        <i class="pe-7s-wallet"></i>
                        <p>Data Guru</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}">
                        <i class="pe-7s-notebook"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mapel.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Mata Pelajaran</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kelas.index') }}">
                        <i class="pe-7s-culture"></i>
                        <p>Kelas</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jurusan.index') }}">
                        <i class="pe-7s-tools"></i>
                        <p>Jurusan</p>
                    </a>
                </li>
                <li>
                    <a href="/jurusan">
                        <i class="pe-7s-file"></i>
                        <p>Lihat Nilai Siswa</p>
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
                    @role('admin')
                    <a href="{{route('nilai.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    @endrole
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
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
                             </tr>
                        @foreach ($nilai as $data)
                        <tr>
                            <td>{{$data->id}}</td>
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
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection