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


Route::get('/seed', function()
{
	// return Redirect::route('home');
	$user = new User;
	$user->name = 'Ivan';
	$user->password = '123';
	$user->role = 'Civitas';
	$user->save();

	// return Redirect::route('home');
	$user = new User;
	$user->name = 'Ivan2';
	$user->password = '123';
	$user->role = 'Civitas';
	$user->save();

	// return Redirect::route('home');
	$user = new User;
	$user->name = 'Ivan3';
	$user->password = '123';
	$user->role = 'Civitas';
	$user->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '3111';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '3112';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '3113';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();


});
// Route::get('/home',array('as' =>'home',LoginLogoutManager@index);
Route::get('/home',array('as' =>'home',function()
{
	return View::make('home',array('title' => 'Home'));
}));
Route::get('/form',array('as'=>'form',function()
{
	return View::make('form',array('title' => 'Form'));
}));
Route::get('/approval',array('as'=>'approval',function()
{
	return View::make('approval',array('title' => 'Approval'));
}));
Route::get('/ruangan',array('as'=>'ruangan',function()
{
	return View::make('ruangan',array('title' => 'Ruangan'));
}));
Route::get('/humas',array('as'=>'humas',function()
{
	return View::make('humas',array('title' => 'Humas'));
}));
Route::get('logout',array('as'=>'logout','uses'=>'LoginLogoutManager@logout'));

Route::get('/ruangan/{id}','RuanganManager@show');
Route::get('/pinjam/{id}','RuanganManager@pinjam');


