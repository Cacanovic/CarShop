<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Drzava;
use App\Proizvodjac;


class mailController extends Controller
{
    public function send(){
    	$drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        
        $data=['name'=>'Mile Cacanovic'];
      $sent=  Mail::send(['text'=>'mail'],$data, function($message){
            $message->to('cacanovicmile@gmail.com','Mile Cacanovic')->subject('slanje mailova');
            $message->from('cacanovicmile@gmail.com','Konj');
        });
        if (! $sent) {
            die('greska');
        }else{
            die('poslato');
        }

  /*  $sent=Mail::send(['text'=>'mail'],['name','Mile'],function($message){
    		$message->to('cacanovicmile@gmail.com','To Mile')->subject('Test Email');
    		$message->from('cacanovicmile@gmail.com','Mile');
    	});
    	if (! $sent) {
            die('greska');
        }else{
            die('poslato');
        }
     return view("kontakt")->with('drzave',$drzave)->with('proizvodjaci',$proizvodjaci);
    }
    */
}
}
