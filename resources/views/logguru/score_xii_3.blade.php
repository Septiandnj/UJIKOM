@extends('layouts.master')
@section('nav')
        @role('admin')
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
                    <a href="#">
                        <i class="pe-7s-id"></i>
                        <p>Regis Guru</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-users"></i>
                        <p>Regis Siswa</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('guru.index') }}">
                        <i class="pe-7s-wallet"></i>
                        <p>Tambah Data Guru</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}">
                        <i class="pe-7s-notebook"></i>
                        <p>Tambah Data Siswa</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mapel.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Tambah Mapel</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kelas.index') }}">
                        <i class="pe-7s-culture"></i>
                        <p>Tambah Kelas</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jurusan.index') }}">
                        <i class="pe-7s-tools"></i>
                        <p>Tambah Jurusan</p>
                    </a>
                </li>
                <li>
                    <a href="/nilai">
                        <i class="pe-7s-file"></i>
                        <p>Lihat Nilai Siswa</p>
                    </a>
                </li>
            @endrole
                
            @role('Guru')
                <div class="logo">
                    <label class="simple-text">
                        Guru Informasi
                    </label>
                </div>

                <ul class="nav">
                    <li>
                        <a href="{{ url('/guru') }}">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                
                    <li>
                        <a href="nilai">
                            <i class="pe-7s-id"></i>
                            <p>Data Nilai Siswa</p>
                        </a>
                    </li>
            @endrole

            @role('Siswa')
                <div class="logo">
                    <label class="simple-text">
                        Siswa Informasi
                    </label>
                </div>

                <ul class="nav">
                    <li>
                        <a href="{{ url('/siswa') }}">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
            @endrole
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
                <div class="panel-heading">Data Nilai Siswa
                </div>
                <div class="panel-body">
                @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    <a href="{{route('logguru.create')}}" class="btn btn-info pull-left"><i class="pe-7s-add-user"></i> Tambah Nilai</a>
                    <table class="table table-hover">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>KKM</th>
                                <th>UH 1</th>
                                <th>UH 2</th>
                                <th>UH 3</th>
                                <th>Rata-Rata</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Raport</th>
                                <th colspan="2">Opsi</th>
                             </tr>

                        @foreach($nilai as $data)
                            <tr>
                                <td>{{$data->nama_siswa}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->kkm}}</td>
                                <td>{{$data->uh}}</td>
                                <td>{{$data->uhh}}</td>
                                <td>{{$data->uhhh}}</td>
                                <td>{{$data->rataa}}</td>
                                <td>{{$data->uts}}</td>
                                <td>{{$data->uas}}</td>
                                <td>{{$data->raport}}</td>
                                <td>
                                  <form method="POST" action="{{ route('logguru.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('logguru.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                  </form>
                                    <a href="{{route('biodata.index')}}" class="btn basic">Biodata</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection