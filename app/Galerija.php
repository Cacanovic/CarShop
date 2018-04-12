<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerija extends Model
{
    public function auta(){
    	return $this->belongsTo('App\Auta');
    }
}
