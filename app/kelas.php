<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    //
    protected $fillable = ['kelas'];
    protected $visible = ['kelas'];
    public $timestamps=true;

    public function siswa()
    {
    	return $this->hasMany('App\siswa','kelas_id');
    }

    public function guru()
    {
    	return $this->hasMany('App\guru','kelas_id');
    }
}
