<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    public function drzave (){
    	$this->belongsTo('App\Drzava');
    }
    public function auto1 (){
    	$this->hasOne('App\Drzava','grad');
    }
}
