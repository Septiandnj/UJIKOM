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

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Silakan Pilih Mata Pelajaran Untuk Melihat Nilai</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ route('hasil.index') }}" class="btn btn-primary">Al-Qur'an</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">SBK</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary">B.Indonesia</a></center>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="/jurusan" class="btn btn-primary">Matematika</a></center>
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
@endsection