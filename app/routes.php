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



Route::get('/', function()
{
	return Redirect::route('home');
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
Route::get('logout','LoginLogoutManager@logout');


