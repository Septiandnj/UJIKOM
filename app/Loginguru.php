<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loginguru extends Model
{
    //
    protected $fillable = ['nama_siswa','jenis_kelamin','kkm','uh','uhh','uhhh','uts','uas','rataa','raport'];
    protected $visible = ['nama_siswa','jenis_kelamin','kkm','uh','uhh','uhhh','uts','uas','rataa','raport'];
    public $timestamps=true;
}
