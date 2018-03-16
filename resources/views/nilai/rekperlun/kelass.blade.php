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
@role('admin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Silakan Pilih Kelas</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('guru.index') }}" class="btn btn-primary">X 1</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">XI 1</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">XII 1</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary">X 2</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">XI 2</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">XII 2</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <div><br><br><br><br><br><br><br><div><br><br><br></div>
                            <div class="col-sm-12">
                                <center><a href="/jenmapel" class="btn btn-primary">XII 3</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endrole

@role('Guru')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Silakan Pilih Kelas</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('guru.index') }}" class="btn btn-primary">X 1</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">XI 1</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">XII 1</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary">X 2</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">XI 2</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">XII 2</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <div><br><br><br><br><br><br><br><div><br><br><br></div>
                            <div class="col-sm-12">
                                <center><a href="/jenmapel" class="btn btn-primary">XII 3</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endrole

@endsection
