<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    public function proizvodjaci(){
    	$this->belongsTo('App\Proizvodjac');
    }
}
