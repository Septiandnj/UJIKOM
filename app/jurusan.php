<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    //
    protected $fillable = ['jurusan'];
    protected $visible = ['jurusan'];
    public $timestamps=true;

    public function siswa()
    {
    	return $this->hasMany('App\siswa','jurusan_id');
    }
}
