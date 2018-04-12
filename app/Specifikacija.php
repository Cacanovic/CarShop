<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifikacija extends Model
{
    public function auta(){
    	return $this->hasOne('App\Auta');
    }
}
