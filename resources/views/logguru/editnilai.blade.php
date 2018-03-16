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
                <div class="panel-heading">Ubah Nilai Siswa
                <div class="panel-title"></div>
                </div>
                <div class="panel-body">
                   <form action="{{route('logguru.update', $nilai->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Nama</label></td>
                            <td><input type="text" name="nama" value="{{$nilai->nama_siswa}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jk" value="Laki Laki" <?php echo ($nilai['jenis_kelamin']=='Laki-Laki')?'checked':''?>>Laki Laki
                            <input type="radio" name="jk" value="Perempuan" <?php echo ($nilai['jenis_kelamin']=='Perempuan')?'checked':''?>>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kkm</label></td>
                            <td><input type="text" name="a" value="{{$nilai->kkm}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 1</label></td>
                            <td><input type="text" name="b" value="{{$nilai->uh}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 2</label></td>
                            <td>
                                <input type="text" name="c" value="{{$nilai->uhh}}" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><label>UH 3</label></td>
                            <td><input type="text" name="d" value="{{$nilai->uhhh}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UTS</label></td>
                            <td>
                                <input type="text" name="f" value="{{$nilai->uts}}" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>UAS</label></td>
                            <td><input type="text" name="g" value="{{$nilai->uas}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Raport</label></td>
                            <td><input type="text" name="h" value="{{$nilai->raport}}" class="form-control"></td>
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
