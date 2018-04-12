<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proizvodjac extends Model
{
    public function modeli(){
    	$this->hasMany('App\Model');
    }
}
