<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    //
    protected $fillable = ['mapel'];
    protected $visible = ['mapel'];
    public $timestamps=true;

    public function guru() 
    {
    	return $this->hasMany('App\guru', 'id_mapel');
    }

    public function nilai() 
    {
    	return $this->hasMany('App\nilai', 'id_mapel');
    }
}
