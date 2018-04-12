<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auta extends Model
{
    public function oprema(){
    	return $this->belongsToMany('App\Oprema');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function specifikacija(){
    	return $this->belongsTo('App\Specifikacija');
    }
    public function galerija(){
    	return $this->hasMany('App\Galerija');
    }
    public function drzav(){
      return   $this->belongsTo('App\Drzava','drzava');
    }
    public function grad1(){
      return   $this->belongsTo('App\Grad','grad');
    }

    public function scopeDrzava($query,$drzava){
        if($drzava==1){
            return $query;
        }
        else{
             return $query->where('drzava',$drzava);     
        }       
    }
    public function scopeGrad($query,$grad){
        if($grad==1){
            return $query;
        }
        else{
             return $query->where('grad',$grad);     
        }       
    }
    public function scopeProizvodjac($query,$proizvodjac){
        if($proizvodjac==1){
            return $query;
        }
        else{
             return $query->where('proizvodjac',$proizvodjac);     
        }       
    }
    public function scopeModel($query,$model){
        if($model==1){
            return $query;
        }
        else{
             return $query->where('model',$model);     
        }       
    }
    public function scopeGorivo($query,$goriva){
        if($goriva){            
            return  $query->whereIn('gorivo',$goriva);              
        }
        else{
             return $query;                 
        }       
    }
     public function scopeStanje($query,$stanja){
        if($stanja){            
            return  $query->whereIn('stanje',$stanja);              
        }
        else{
             return $query;                 
        }       
    }
  
    
  
   
}
