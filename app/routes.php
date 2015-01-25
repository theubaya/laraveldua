<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//

// Confide routes
Route::post('users', 'UsersController@store');
Route::get('/login', array(
	'as'	=> 'users/login',
	'uses'=>'UsersController@login'

));
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');

//front routes
Route::any('/',array(
	'as'	=> "home",
	'uses'	=> "FrontController@getHomepage"
	));

Route::any('/gempaterkini',array(
	'as'	=> "front/terkini",
	'uses'	=> "FrontController@getTerkini"
	));

Route::any('/gempaterasa',array(
	'as'	=> "front/terasa",
	'uses'	=> "FrontController@getTerasa"
	));

Route::any('/statistikgempa',array(
	'as'	=> "front/statistikgempa",
	'uses'	=> "FrontController@getStatistikgempa"
	));

Route::any('/jaringansensor',array(
	'as'	=> "front/jaringansensor",
	'uses'	=> "FrontController@getJaringansensor"
	));

//Back routes
Route::group(array('before' => 'auth','prefix' => 'admin'), function()
{
	/*Confide Auth*/
	Route::get('/users/create', array(
		'as'	=> 'users/create',
		'uses' 	=> 'UsersController@create'
	));
	Route::get('/users/logout', array(
		'as'	=> 'users/logout',
		'uses'=>'UsersController@logout'
	));


	/*Costumize*/
	Route::any('/',array(
		'as'	=> "back/inputgempa",
		'uses'	=> "BackController@getInputgempa"
		));

	Route::any('/user',array(
		'as'	=> "back/pengguna",
		'uses'	=> "BackController@getPengguna"
		));

	Route::any('/artikel',array(
		'as'	=> "back/artikel",
		'uses'	=> "BackController@getArtikel"
		));

	Route::any('/laporan',array(
		'as'	=> "back/laporan",
		'uses'	=> "BackController@getLaporan"
		));

	Route::any('/unduhdata',array(
		'as'	=> "back/unduhdata",
		'uses'	=> "BackController@getUnduh"
	));
});

Route::any('test',function(){

	echo Form::open();
	echo Form::text('kota',null,array('placeholder'=>'Kota'));
	echo Form::text('provinsi',null,array('placeholder'=>'provinsi'));
	echo Form::submit('simpan');
	echo Form::close();

	if(Input::server("REQUEST_METHOD")=="POST"){
		$data = array(
			'kota'	=> Input::get('kota'),
			'provinsi'	=> Input::get('provinsi')
		);

		Regional::create($data);
		Redirect::refresh();
	}

	$regional = Regional::all();
	foreach($regional as $row){
		echo $row."<br>";
	}
});