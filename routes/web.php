<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[
		'uses'=>'CarController@getHome',
		'as'=>'home'
	]);

Route::get('/pregled', [
		'uses'=>'CarController@getAutoDetaljno',
		'as'=>'pregled'
	]);
Route::post('/pregled', [
		'uses'=>'CarController@postAutoDetaljno',
		'as'=>'pregled'
	]);

Route::get('/auta', 'CarController@getAuta');
Route::get('/kontaktirajte-nas', 'CarController@getKontakt');
Route::post('/search','CarController@searchForm');

Route::group(['middleware'=>'guest'],function(){

		Route::get('/sign-up',[
					'uses'=>'UserController@getSignUp',
					'as'=>'user.signup'
				]);

		Route::post('/sign-up' , [
					'uses' =>'UserController@postSignUp',
						'as' =>'user.signup'
				]);

		Route::get('/sign-in',[
					'uses'=>'UserController@getSignIn',
					'as'=>'user.signin'
				]);
				
		Route::post('/sign-in' , [
					'uses' =>'UserController@postSignIn',
					'as' =>'user.signin'
				]);
});
Route::group(['middleware'=>'auth'],function(){
	Route::get('/dashboard',[
		'uses'=>'CarController@getDashboard',
		'as'=>'dashboard'
		]);

	Route::post('/dodaj-oglas',[
		'uses'=>'CarController@dodajAuto',
		'as'=>'auto.dodaj'
		]);
	Route::get('/logout',[
		'uses'=>'UserController@getLogout',
		'as'=>'user.logout'
		]);
	Route::get('/moji-oglasi',[

		'uses'=> 'CarController@mojiOglasi',
		'as'=>'moji.oglasi'
		]);

	Route::post('edit-car',[
		'uses'=>'CarController@editAuto',
		'as'=>'auto.edit'
	]);
	Route::post('/izmjeni-oglas',[
		'uses'=>'CarController@izmjeniAuto',
		'as'=>'auto.izmjeni'
		]);
Route::post('delete-car',[
		'uses'=>'CarController@deleteAuto',
		'as'=>'auto.delete'
	]);

});

Route::get('/nalog', 'CarController@getNalog')->name('user.nalog');

Route::post('/pretrazivanje', [
			'uses'=>'CarController@postPretrazivanje',
			'as'=>'car.search'
		]);
Route::get('send','mailController@send');



