<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
	public function gradovi() {
		return $this->hasMany('App\Grad');
	}
	
	public function aut(){
		return $this->hasOne('App\Auta','drzava');
	}	
}
