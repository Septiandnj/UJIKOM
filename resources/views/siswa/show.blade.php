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

@section('content')

<center><h1>Detail Biodata siswa</h1></center>
<input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      {{csrf_field()}}
        <div class="panel">
            <div class="panel-heading">Detail</div>
            <div class="panel-body">
            <div class="table-responsive"> 
                <table class="table">
                    <thead>
                        @php
                        $siswa = App\siswa::where('id_user', Auth::User()->id)->first();
                        $kelas = App\kelas::where('id', Auth::User()->id)->first();
                        $mapel = App\mapel::where('id', Auth::User()->id)->first();
                        @endphp
                        <tr>
                            <td>NIS</td>
                        <td>{{ $siswa->nis }}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img src="{{asset('img/'.$siswa->foto)}}" width="75px" height="75px"></td>
                        </tr>
                        <tr>
                            <td>Nama siswa</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $siswa->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>{{ $kelas->kelas }}</td>
                        </tr>
                        <tr>
                            <td>Mapel</td>
                            <td>{{ $mapel->mapel }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $siswa->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $siswa->no_telepon }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            </div>
        </div>
@endsection