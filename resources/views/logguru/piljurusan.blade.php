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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Silakan Pilih Jurusan</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="/kelas" class="btn btn-primary"><i class="pe-7s-usb"></i> REKAYASA PERANGKAT LUNAK</a></center>
                                  <div><br><br><br></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary"><i class="pe-7s-car"></i> TEKNIK KENDARAAN RINGAN</a></center>
                                <div><br><br><br></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="#" class="btn btn-primary"><i class="pe-7s-bicycle"></i> TEKNIK SEPEDA MOTOR</a></center>
                                <div><br><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
