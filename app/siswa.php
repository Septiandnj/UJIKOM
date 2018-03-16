<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $fillable = ['id_user','nis','foto','nama_siswa','jenis_kelamin','tanggal_lahir','kelas_id','jurusan_id','alamat','no_telepon'];
    protected $visible = ['id_user','nis','foto','nama_siswa','jenis_kelamin','tanggal_lahir','kelas_id','jurusan_id','alamat','no_telepon'];
    public $timestamps=true;

    public function jurusan()
    {
    	return $this->belongsTo('App\jurusan','jurusan_id');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\kelas','kelas_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function siswa() 
    {
        return $this->hasMany('App\siswa');
    }

    public function nilai() 
    {
        return $this->hasMany('App\nilai', 'id_siswa');
    }
}
