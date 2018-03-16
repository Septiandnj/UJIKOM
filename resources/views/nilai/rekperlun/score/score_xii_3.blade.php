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
                    <a href="{{url('nilais')}}" class="btn btn-info pull-left"><i class="pe-7s-add-user"></i> Tambah Nilai</a>
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
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
                                <th colspan="2">Detail</th>
                             </tr>
                        <tbody>
                            <td>7</td>
                            <td>Tasya Lutfrida</td>
                            <td>Perempuan</td>
                            <td>75</td>
                            <td>79</td>
                            <td>80</td>
                            <td>89</td>
                            <td>90</td>
                            <td>88</td>
                            <td>82</td>
                            <td>83</td>
                            <td><a href="/bio" class="btn basic">Biodata</a></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection