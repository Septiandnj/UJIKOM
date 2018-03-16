@extends('layouts.master')
@section('nav')

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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <h4><center>Silakan Pilih Mata Pelajaran Untuk Melihat Nilai</center></h4><br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="/score" class="btn btn-primary">Al-Qur'an</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">SBK</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-primary">B.Indonesia</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary">Matematika</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">Penjas</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">PKN</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary">PAI</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">DKK</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">Fisika</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-primary">B.Inggris</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">IPA</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-primary">Kimia</a></center>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
