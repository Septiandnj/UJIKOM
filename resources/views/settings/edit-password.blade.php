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

@section('title')
Edit Password
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home')}}">Dashboard</a></li>
                <li class="active">Ubah Password</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                <h2 class="panel-title">Ubah Password</h2>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => url('/settings/password'), 'method' => 'post', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('password') ? 'has-errors' : '' }}">
                        {!! Form::label('password', 'Password Lama', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                     </div>

                     <div class="form-group{{ $errors->has('new_password') ? 'has-errors' : '' }}">
                        {!! Form::label('new_password', 'Password Baru', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('new_password', ['class'=>'form-control']) !!}
                            {!! $errors->first('new_password', '<p class="help-block">:message</p>') !!}
                        </div>
                     </div>

                     <div class="form-group{{ $errors->has('new_password_confirmation') ? 'has-errors' : '' }}">
                        {!! Form::label('new_password_confirmation', 'Konfirmasi Password Baru', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('new_password_confirmation', ['class'=>'form-control']) !!}
                            {!! $errors->first('new_password_confirmation', '<p class="help-block">:message</p>') !!}
                        </div>
                     </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection