<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Auta;
use App\Drzava;
use App\Proizvodjac;

class UserController extends Controller
{
    public function getSignUp(){
        return view("signup");
    }

    public function postSignUp(Request $request){
    	$this->validate($request,[
    			'ime'=>'required',
    			'email'=>'email|required|unique:users',
    			'password'=>'required|min:4'
    		]);
    	$user=new User([
    		'ime'=>$request->input('ime'),
    		'telefon'=>$request->input('telefon'),
    		'email'=>$request->input('email'),
    		'password'=>bcrypt($request->input('password'))
    	]);
    	$user->save();

        Auth::login($user);

    	return redirect()->route('dashboard');
    }

    public function getSignIn(){
        return view("signin");
    }
    public function postSignIn(Request $request){
        $this->validate($request,[
                'email'=>'email|required',
                'password'=>'required|min:4'
            ]);
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function getLogout(){
        Auth::logout();
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $auta=Auta::all();
        $random = Auta::orderByRaw('RAND()')->take(5)->get();
        return view("home")->with('auta',$auta)->with('random',$random)->with('drzave',$drzave)->with('proizvodjaci',$proizvodjaci);
    }
}
