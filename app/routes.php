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
	return View::make('home',array('title' => 'Home'));
});
Route::get('/form',function()
{
	return View::make('form',array('title' => 'Form'));
});
Route::get('/approval',function()
{
	return View::make('approval',array('title' => 'Approval'));
});
Route::get('/ruangan',function()
{
	return View::make('ruangan',array('title' => 'Ruangan'));
});
Route::get('/humas',function()
{
	return View::make('humas',array('title' => 'Humas'));
});


