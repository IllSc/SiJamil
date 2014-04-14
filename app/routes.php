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

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2301';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2302';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2303';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2304';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2305';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2306';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();


	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2401';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();


	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2402';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2403';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();


	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2404';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2405';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2406';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2502';
	$ruangan->kapasitas = '99';
	$ruangan->fasilitas = 'AC';
	$ruangan->lantai = '2';
	$ruangan->save();


});

Route::get('/login', function()
{
	return View::make('login',array('title' => 'Login'));
});


Route::get('/', array('as' => 'home', function () {
    return View::make('home');
}))->before('auth');;

Route::get('/home',array('as' =>'home','before' => 'auth',function()
{
	return View::make('home',array('title' => 'Home'));
}))->before('auth');
Route::get('/form',array('as'=>'form',function()
{
	return View::make('form',array('title' => 'Form'));
}))->before('auth');
Route::get('/approval',array('as'=>'approval',function()
{
	return View::make('approval',array('title' => 'Approval'));
}))->before('auth');
Route::get('/ruangan',array('as'=>'ruangan',function()
{
	return View::make('ruangan',array('title' => 'Ruangan'));
}))->before('auth');
Route::get('/humas',array('as'=>'humas',function()
{
	return View::make('humas',array('title' => 'Humas'));
}))->before('auth');

Route::get('/deskripsi',array('as'=>'deskripsi',function()
{
	return View::make('deskripsi',array('title' => 'deskripsi'));
}))->before('auth');
Route::get('logout',array('as'=>'logout','uses'=>'LoginLogoutManager@logout'))->before('auth');
Route::get('login',array('as'=>'login','uses'=>'LoginLogoutManager@login'));
Route::get('/ruangan','RuanganManager@ruanganHome')->before('auth');
Route::get('/ruangan/{id}','RuanganManager@show')->before('auth');
Route::get('/pinjam/{id}','RuanganManager@pinjam')->before('auth');

Route::post('/pinjam/{id}','RuanganManager@simpanPinjaman')->before('auth');
Route::post('login',array('uses'=>'LoginLogoutManager@doLogin'));
