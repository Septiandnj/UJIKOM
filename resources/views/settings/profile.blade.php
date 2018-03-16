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
                        <a href="#">
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
            <div class="panel panel-default">
                <div class="panel-heading">
                <label class="panel-title"><h3><b>Profil</b></h3></label>
                </div>

                <div class="panel-body">
                <table class="table">
                <tbody>
                    <tr>
                        <td class="text-muted">Nama</td>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted">Email</td>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                </tbody>
                </table>
                    <a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection