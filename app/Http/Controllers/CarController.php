<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drzava;
use App\Grad;
use App\Proizvodjac;
use App\Auta;
use App\Oprema;
use App\Specifikacija;
use App\Galerija;
use Illuminate\Support\Facades\DB;
use Auth;
use Response;
use Illuminate\Support\Facades\Storage;


class CarController extends Controller
{

    public function getHome(){
    	$drzave=Drzava::all();
    	$proizvodjaci=Proizvodjac::all();
    	//$gradovi=DB::table('grads')->where('drzavas_id','=',1)->get();
        $auta=Auta::all();
        $random = Auta::orderByRaw('RAND()')->take(5)->get();
    	return view("home")->with('random',$random)->with('drzave',$drzave)->with('auta',$auta)->with('proizvodjaci',$proizvodjaci);
    }

    public function getAutoDetaljno(){
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        return view("auto-detaljno")->with('drzave',$drzave)->with('proizvodjaci',$proizvodjaci);
    }
     public function postAutoDetaljno(Request $request){
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $auto=Auta::find($request->id);
        return view("auto-detaljno")->with('drzave',$drzave)->with('auto',$auto)->with('proizvodjaci',$proizvodjaci);
    }

    public function searchForm(Request $request){
    	if($request->drzava){
    		$gradovi=DB::table('grads')->where('drzava_id','=',$request->drzava)->get();
            return $gradovi;
    	}
        if($request->proizvodjac){
            $modeli=DB::table('models')->where('proizvodjac_id','=',$request->proizvodjac)->get();
            return $modeli;
        }
    	
    }

    public function getAuta(Request $request){
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $auta=Auta::all();
        return view("auta-kratak-pregled")->with('drzave',$drzave)->with('auta',$auta)->with('proizvodjaci',$proizvodjaci);
    }

    public function getKontakt(){
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        return view("kontakt")->with('drzave',$drzave)->with('proizvodjaci',$proizvodjaci);
    }

    
    public function getNalog(){

        $oprema = Auta::find(1)->oprema;
        $mile="";
        foreach ($oprema as $op) {
            $mile=$mile."-".$op->naziv;
        }
        die($mile);
        return route('users.nalog');
    }

    public function postPretrazivanje(Request $request){
        $goriva=$request->gorivo1;
        $stanja=$request->stanje1; 
        if ( $request->gorivo1) {
           $goriva = explode(',', $request->gorivo1);
        }
        if ( $request->stanje1) {
            $stanja = explode(',', $request->stanje1);
        }
       
               
        $cijenaMin=$request->cijenaMin1;
        $cijenaMax=$request->cijenaMax1;
        $kilometrazaMin=$request->kilometrazaMin1;
        $kilometrazaMax=$request->kilometrazaMax1;
        $godisteMin=$request->godisteMin1;
        $godisteMax=$request->godisteMax1;
        $drzava=$request->drzava;
        $grad=$request->grad;
        $proizvodjac=$request->proizvodjac;
        $model=$request->model;
        $mile="";
       
        if ($cijenaMin) {
            $mile=$mile."cijenaMin=".$cijenaMin;
        }
        if ($cijenaMax) {
            $mile=$mile."cijenaMax=".$cijenaMax;
        }
        if ($kilometrazaMin) {
            $mile=$mile."kilometrazaMin".$kilometrazaMin;
        }
        if ($kilometrazaMax) {
            $mile=$mile."kilometrazaMax".$kilometrazaMax;
        }
        if ($godisteMin) {
            $mile=$mile."godisteMin".$godisteMin;
        }
        if ($godisteMax) {
            $mile=$mile."godisteMax".$godisteMax;
        }
       
        if ($grad) {
            $mile=$mile."grad".$grad;
        }
        if ($proizvodjac) {
            $mile=$mile."proizvodjac".$proizvodjac;
        }
        if ($model) {
            $mile=$mile."model".$model;
        }
        $id=Auth::id();
        $mile=$mile."ID usera".$id;
        $auta=Auta::select('autas.*')
                ->Drzava($drzava)
                ->Grad($grad)
                ->Proizvodjac($proizvodjac)
                ->Model($model)
                ->Gorivo($goriva)
                ->Stanje($stanja)         
                ->whereBetween('cijena', [$cijenaMin,$cijenaMax])
                ->whereBetween('kilometraza', [$kilometrazaMin,$kilometrazaMax])
                ->whereBetween('godiste', [$godisteMin, $godisteMax])
                ->get();
                 

        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        return view("auta-kratak-pregled")->with('drzave',$drzave)->with('auta',$auta)->with('proizvodjaci',$proizvodjaci);
       
    }

    public function getDashboard(){
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $oprema=Oprema::all();
        return view("dashboard")->with('drzave',$drzave)->with('proizvodjaci',$proizvodjaci)->with('oprema',$oprema);
    }

    public function dodajAuto(Request $request){
        //ovdje treba dodati validaciju
        $this->validate($request,[
                'prenos'=>'required',
                'kapacitet'=>'required|numeric',
                'potrosnja'=>'required|numeric',
                'vrata'=>'required|numeric',
                'sjedista'=>'required|numeric',
                'enterijer'=>'required',
                'pogon'=>'required',
                'eksterijer'=>'required',
                'title'=>'required',
                'cijena'=>'required',
                'kilometraza'=>'required',
                'godiste'=>'required',
                'naslovna_slika'=>'image| mimes:jpeg,jpg,png'
            ]);                
        $success="";
        $greska="";
        //dodavanje specifikacija auta
        $specifikacija=new Specifikacija();
        $specifikacija->prenos=$request->prenos;
        $specifikacija->kapacitet_goriva=$request->kapacitet;
        $specifikacija->potrosnja=$request->potrosnja;
        $specifikacija->broj_vrata=$request->vrata;
        $specifikacija->broj_sjedista=$request->sjedista;
        $specifikacija->pogon=$request->pogon;
        $specifikacija->eksterijer=$request->eksterijer;
        $specifikacija->enterijer=$request->enterijer;
        $specifikacija->save();

        //dodavanje auta
        $auto=new Auta;
        $auto->user_id=Auth::id();
        $auto->specifikacija_id=$specifikacija->id;
        $auto->naziv=$request->title;
        $auto->cijena=$request->cijena;
        $auto->godiste=$request->godiste;
        $auto->kilometraza=$request->kilometraza;
        $auto->drzava=$request->drzava;
        $auto->grad=$request->grad;
        $auto->proizvodjac=$request->proizvodjac;
        $auto->model=$request->model;
        $auto->gorivo=$request->gorivo;
        $auto->stanje=$request->stanje;
        $auto->naslovna_slika='default.jpg';
        if($auto->save()){
            $success="Uspjesno ste dodali auto oglas !!!";
        } else{
            $greska="Doslo je do nekih problema !!!";
        }


        //dodavanje naslovne slike
        if($request->hasFile('naslovna_slika')){
               $ekstenzija=$request->naslovna_slika->getClientOriginalExtension();
               $imeNaslovneSlike=$auto->id."_".microtime().".".$ekstenzija;
               $auto->naslovna_slika=$imeNaslovneSlike;
               $auto->save();
               $path=$request->file('naslovna_slika')->storeAs('public/naslovneSlike',$imeNaslovneSlike);
        }

        //dodavanje opreme
        $oprema = $request->oprema;
        if($oprema){
            $auto=Auta::find($auto->id);
            $auto->oprema()->sync($oprema);
        }

       
          //dodavanje slika Galerija
       
          if($request->hasFile('galerija')){

            foreach ($request->galerija as $galerija) {
               $ekstenzija=$galerija->getClientOriginalExtension();
               $imeSlike=$auto->id."_".microtime().".".$ekstenzija;
               $slika=new Galerija;
               $slika->auta_id=$auto->id;
               $slika->naziv=$imeSlike;
               $slika->save();
               $path=$galerija->storeAs('public/galerija',$imeSlike);
            }
        }

        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $oprema=Oprema::all();
        return view("dashboard")->with('drzave',$drzave)->with('success',$success)->with('greska',$greska)->with('proizvodjaci',$proizvodjaci)->with('oprema',$oprema);
       //na kraju ako je dodato auto onda treba dodati slike 
    }

    public function mojiOglasi(){
        $id=Auth::id();
        $auta=DB::table('autas')->where('user_id','=',$id)->get();
        return view('dash-oglasi')->with('auta',$auta);

    }


    public function editAuto(Request $request){
        $id=$request->id;
        $auto=Auta::find($id);
        $gorivo=['Benzin','Dizel','Plin'];
        $stanje=['Polovno','Novo','Osteceno'];
        $specifikacija=DB::table('specifikacijas')->where('id',$auto->specifikacija_id)->get();
        $drzave=Drzava::all();
        $grad=DB::table('grads')->where('drzava_id',$auto->drzava)->get();
        $proizvodjaci=Proizvodjac::all();
        $modeli=DB::table('models')->where('proizvodjac_id',$auto->proizvodjac)->get();
        $oprema=Oprema::all();
        $oprema1=DB::table('auta_oprema')->where('auta_id',$id)->get();
        $oprema2=[];
        foreach ($oprema1 as $oprema1) {
            $oprema2[]=$oprema1->oprema_id;
        }

        return view("edit-auto")->with(['drzave'=>$drzave, 'auto'=>$auto, 'grad'=>$grad, 'proizvodjaci'=>$proizvodjaci, 'oprema'=>$oprema, 'modeli'=>$modeli, 'gorivo'=>$gorivo, 'stanje'=>$stanje,'oprema2'=>$oprema2, 'specifikacija'=>$specifikacija]);
     
    }
    public function izmjeniAuto(Request $request){
        //ovdje treba dodati validaciju
        $this->validate($request,[
                'prenos'=>'required',
                'kapacitet'=>'required|numeric',
                'potrosnja'=>'required|numeric',
                'vrata'=>'required|numeric',
                'sjedista'=>'required|numeric',
                'enterijer'=>'required',
                'pogon'=>'required',
                'eksterijer'=>'required',
                'title'=>'required',
                'cijena'=>'required',
                'kilometraza'=>'required',
                'godiste'=>'required',
                'naslovna_slika'=>'image| mimes:jpeg,jpg,png'
            ]);                
        $success="";
        $greska="";
        //dodavanje specifikacija auta
        $specifikacija=Specifikacija::find($request->id_spec);
        $specifikacija->prenos=$request->prenos;
        $specifikacija->kapacitet_goriva=$request->kapacitet;
        $specifikacija->potrosnja=$request->potrosnja;
        $specifikacija->broj_vrata=$request->vrata;
        $specifikacija->broj_sjedista=$request->sjedista;
        $specifikacija->pogon=$request->pogon;
        $specifikacija->eksterijer=$request->eksterijer;
        $specifikacija->enterijer=$request->enterijer;
        $specifikacija->save();

        //dodavanje auta
        $auto=Auta::find($request->id_auto);
        $auto->user_id=Auth::id();
        $auto->specifikacija_id=$specifikacija->id;
        $auto->naziv=$request->title;
        $auto->cijena=$request->cijena;
        $auto->godiste=$request->godiste;
        $auto->kilometraza=$request->kilometraza;
        $auto->drzava=$request->drzava;
        $auto->grad=$request->grad;
        $auto->proizvodjac=$request->proizvodjac;
        $auto->model=$request->model;
        $auto->gorivo=$request->gorivo;
        $auto->stanje=$request->stanje;
        if($auto->save()){
            $success="Uspjesno ste izmjenili auto oglas !!!";
        } else{
            $greska="Doslo je do nekih problema !!!";
        }
        //dodavanje naslovne slike
        if($request->hasFile('naslovna_slika')){
               Storage::delete('/public/naslovneSlike/'.$auto->naslovna_slika);
               $ekstenzija=$request->naslovna_slika->getClientOriginalExtension();
               $imeNaslovneSlike=$request->id_auto."_".microtime().".".$ekstenzija;
               $auto->naslovna_slika=$imeNaslovneSlike;
               $auto->save();
               $path=$request->file('naslovna_slika')->storeAs('public/naslovneSlike',$imeNaslovneSlike);
        }
        //dodavanje opreme
        $oprema = $request->oprema;
        if($oprema){
            $auto=Auta::find($request->id_auto);
            $auto->oprema()->sync($oprema);
        }       
        //dodavanje slika Galerija       
          if($request->hasFile('galerija')){
            $gal1=$auto->galerija();
            $galerija1=DB::table('galerijas')->where('auta_id',$request->id_auto)->get();
            
            if (count($galerija1)>0) {
                foreach ($galerija1 as $gal) {
                   Storage::delete('/public/galerija/'.$gal->naziv);
                }
                $gal1->delete();
            }

            foreach ($request->galerija as $galerija) {
               $ekstenzija=$galerija->getClientOriginalExtension();
               $imeSlike=$request->id_auto."_".microtime().".".$ekstenzija;
               $slika=new Galerija;
               $slika->auta_id=$request->id_auto;
               $slika->naziv=$imeSlike;
               $slika->save();
               $path=$galerija->storeAs('public/galerija',$imeSlike);
            }
        }
        $drzave=Drzava::all();
        $proizvodjaci=Proizvodjac::all();
        $oprema=Oprema::all();
        $grad=DB::table('grads')->where('drzava_id',$auto->drzava)->get();
        $proizvodjaci=Proizvodjac::all();
        $modeli=DB::table('models')->where('proizvodjac_id',$auto->proizvodjac)->get();
        $gorivo=['Benzin','Dizel','Plin'];
        $stanje=['Polovno','Novo','Osteceno'];
        $oprema1=DB::table('auta_oprema')->where('auta_id',$request->id_auto)->get();
        $oprema2=[];
        foreach ($oprema1 as $oprema1) {
            $oprema2[]=$oprema1->oprema_id;
        }
        $specifikacija=DB::table('specifikacijas')->where('id',$auto->specifikacija_id)->get();

        return view("edit-auto")->with(['drzave'=>$drzave, 'auto'=>$auto, 'grad'=>$grad, 'proizvodjaci'=>$proizvodjaci, 'oprema'=>$oprema, 'modeli'=>$modeli, 'gorivo'=>$gorivo, 'stanje'=>$stanje,'oprema2'=>$oprema2, 'specifikacija'=>$specifikacija,'success'=>$success,'greska'=>$greska]);
       //na kraju ako je dodato auto onda treba dodati slike
    }


    public function deleteAuto(Request $request){
        $id=$request->id;
        $auto=Auta::find($id);
        $mile="konj";
        $gal1=$auto->galerija();
        $galerija=DB::table('galerijas')->where('auta_id',$id)->get();
        if (count($galerija)>0) {
            foreach ($galerija as $gal) {
               Storage::delete('/public/galerija/'.$gal->naziv);
            }
            $gal1->delete();
        }

        $specifikacija=$auto->specifikacija();
        //brisanje specifikacije
        $specifikacija->delete();
        //uklanjanje iz tabele oprema 
        $auto->oprema()->sync([]);
        Storage::delete('/public/naslovneSlike/'.$auto->naslovna_slika);
        $auto->delete();
         $id=Auth::id();
        $auta=DB::table('autas')->where('user_id','=',$id)->get();
        return view('/dash-oglasi')->with('auta',$auta)->with('success','Vas oglas je uspjesno obrisan');

    }

}
