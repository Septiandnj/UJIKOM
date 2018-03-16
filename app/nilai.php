<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    //
    protected $fillable = ['id_siswa','id_mapel','kkm','uh1','uh2','uh3','uh4','rataa','uts','uas'];
    protected $visible = ['id_siswa','id_mapel','kkm','uh1','uh2','uh3','uh4','rataa','uts','uas'];
    public $timestamps=true;

    public function siswa()
    {
    	return $this->belongsTo('App\siswa', 'id_siswa');
    }

    public function mapel()
    {
    	return $this->belongsTo('App\mapel', 'id_mapel');
    }
}
