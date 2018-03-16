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
                    <a href="nilai">
                        <i class="pe-7s-file"></i>
                        <p>Data Nilai Siswa</p>
                    </a>
                </li>
                
            </ul>
        </div>

@endsection

@section('content')

<center><h1>Detail Biodata Guru</h1></center>
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
                        $guru = App\guru::where('id_user', Auth::User()->id)->first();
                        @endphp
                        <tr>
                            <td>NIG</td>
                        <td>{{ $guru->nipg }}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><img src="{{asset('img/'.$guru->foto)}}" width="75px" height="75px"></td>
                        </tr>
                        <tr>
                            <td>Nama Guru</td>
                            <td>{{ $guru->nama_guru }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $guru->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $guru->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mapel</td>
                            <td>{{ $guru->mapel->mapel }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $guru->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $guru->no_telepon }}</td>
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