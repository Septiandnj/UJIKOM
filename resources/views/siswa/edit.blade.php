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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Siswa
                </div>
                <div class="panel-body">
                   <form action="{{route('siswa.update',$siswas->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id_user" value="{{$siswas->id_user}}">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>NIS</label></td>
                            <td><input type="text" name="nis" class="form-control" value="<?php echo $siswas['nis'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Foto</label></td>
                            <td><img src="{{asset('img/'.$siswas->foto)}}" width="75px" height="75px"><input type="file" name="foto"></td>
                        </tr>
                        <tr>
                            <td><label>Nama siswa</label></td>
                            <td><input type="text" name="nama_siswa" class="form-control" value="<?php echo $siswas['nama_siswa'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" 
                            <?php echo ($siswas['jenis_kelamin']=='Laki-Laki')?'checked':''?>>Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan" 
                            <?php echo ($siswas['jenis_kelamin']=='Perempuan')?'checked':''?>>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $siswas['tanggal_lahir'];?>">
                            </td>
                        </tr>
                        <tr>
                             <td><label>Kelas</label></td>
                                <td><select class="form-control" name="kelas_id">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->kelas}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                             <td><label>Jurusan</label></td>
                                <td><select class="form-control" name="jurusan_id">
                                @foreach($jurusan as $data)
                                <option value="{{$data->id}}">{{$data->jurusan}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" class="form-control"><?php echo $siswas['alamat'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $siswas['no_telepon'];?>"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td>
                                <input type="Email" name="email" class="form-control" value="<?php echo $siswas['email'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td>
                                <input type="Password" name="password" class="form-control" value="<?php echo $siswas['password'];?>"></textarea>
                            </td>
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
