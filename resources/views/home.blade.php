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
            @endrole
                
            @role('guru')
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
            @endrole

            @role('siswa')
                <div class="logo">
                    <label class="simple-text">
                        Siswa Informasi
                    </label>
                </div>

                <ul class="nav">
                    <li>
                        <a href="{{ url('/home') }}">
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
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('guru.index') }}" class="btn btn-primary"><i class="pe-7s-wallet"></i> DATA GURU</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary"><i class="pe-7s-culture"></i> DATA KELAS</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary"><i class="pe-7s-users"></i> DATA SISWA</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary"><i class="pe-7s-tools"></i> DATA JURUSAN</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('mapel.index') }}" class="btn btn-primary"><i class="pe-7s-news-paper"></i> DATA MAPEL</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="/jurusan" class="btn btn-primary"><i class="pe-7s-file"></i> NILAI SISWA</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole

@role('guru')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <center><a href="{{ route('nilai.index') }}" class="btn btn-primary"><i class="pe-7s-wallet"></i> Tambah Data Nilai Siswa</a></center>
                                  <div><br><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole

@role('siswa')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <h4><center>Silakan Pilih Mata Pelajaran Untuk Melihat Nilai</center></h4><br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ route('hasil.index') }}" class="btn btn-primary">Al-Qur'an</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#}}" class="btn btn-primary">SBK</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#}}" class="btn btn-primary">B.Indonesia</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">Matematika</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">Penjas</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">PKN</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">PAI</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">DKK</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">Fisika</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">B.Inggris</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">IPA</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">Kimia</a></center>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endrole
@endsection
