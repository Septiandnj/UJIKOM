@extends('layouts.master')
@section('nav')

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
                    <a href="/nilai">
                        <i class="pe-7s-file"></i>
                        <p>Data Nilai Siswa</p>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Nilai Siswa
                <div class="panel-title"></div>
                </div>
                <div class="panel-body">
                   <form action="{{route('logguru.store')}}" method="post" enctype="multipart/form-data" files="true">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Nama</label></td>
                            <td><input type="text" name="nama" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jk" value="Laki Laki" class="">Laki Laki
                            <input type="radio" name="jk" value="Perempuan" class="">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kkm</label></td>
                            <td><input type="text" name="a" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 1</label></td>
                            <td><input type="text" name="b" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 2</label></td>
                            <td>
                                <input type="text" name="c" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><label>UH 3</label></td>
                            <td><input type="text" name="d" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UTS</label></td>
                            <td>
                                <input type="text" name="f" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>UAS</label></td>
                            <td><input type="text" name="g" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Raport</label></td>
                            <td><input type="text" name="h" class="form-control"></td>
                        </tr>
                    </table>
                        <th>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </th>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
