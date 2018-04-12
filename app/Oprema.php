<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oprema extends Model
{
    public function auta(){
    	return $this->belongsToMany('App\Auta');
    }
}
