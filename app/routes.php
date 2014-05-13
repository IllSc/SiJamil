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
use Faker\Factory as Faker;


Route::get('/seed/ruangan', function()
{
	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2301';
	$ruangan->kapasitas = '65';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2302';
	$ruangan->kapasitas = '67';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2303';
	$ruangan->kapasitas = '67';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2304-2305';
	$ruangan->kapasitas = '100';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2306';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2307';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2401';
	$ruangan->kapasitas = '53';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2402-2403';
	$ruangan->kapasitas = '120';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2404';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2405';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2502';
	$ruangan->kapasitas = '53';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '5';
	$ruangan->save();
	
	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2602';
	$ruangan->kapasitas = '52';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '6';
	$ruangan->save();
	
	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2603';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '6';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = 'Aula';
	$ruangan->kapasitas = '180';
	$ruangan->fasilitas = 'AC, Layar, Infocus, White Board';
	$ruangan->lantai = '1';
	$ruangan->save();

});

Route::get('auth',function()
{
	if (Auth::guest())
    {
        return Cas::login();
    }
	//echo(Auth::user()->role);
});

Route::get('/login', function()
{
	return View::make('login',array('title' => 'Login'));
});

Route::get('/cas', array('as' => 'cas', function ()
{
    return View::make('home');
}))->before('cas');

Route::get('/user/cas', function()
{
    if(Cas::check()) return Cas::reload();
    //Redirect::to('/');
});

Route::get('/', array('as' => 'home', function () {
    return View::make('home');
}))->before('auth');

Route::get('/home',array('as' =>'home','before' => 'auth',function()
{
	$role = Auth::user()->role;
	if($role == "Humas"){
		return Redirect::action('PenyetujuManager@humas');
	} else if($role == "Mahalum"){
		return Redirect::action('PenyetujuManager@mahalum');
	} else if($role == "Perlengkapan"){
		return Redirect::action('PenyetujuManager@perlengkapan');
	} else {
		return View::make('home',array('title' => 'Home'));
	}
	
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

Route::get('/history',array('as'=>'history',function()
{
	return Redirect::action('PenyetujuManager@history');
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


Route::post('/simpanPinjam/{id}','RuanganManager@simpanPinjaman')->before('auth');

Route::post('login',array('uses'=>'LoginLogoutManager@doLogin'));

Route::filter('mahalum',function()
{
	if (Auth::user()->role != "Mahalum") {
		return Redirect::to('home');
	}
});

Route::filter('humas',function()
{
	if (Auth::user()->role != "Humas") {
		return Redirect::to('home');
	}
});

Route::filter('perlengkapan',function()
{
	if (Auth::user()->role != "Perlengkapan") {
		return Redirect::to('home');
	}
});

Route::filter('civitas',function()
{
	$role = Auth::user()->role;
	if ($role != "Perlengkapan" && $role != "Humas" && $role != "Mahalum" ) {
		return Redirect::to('home');
	}
});


Route::get('toMahalum/{id}',array('before'=>array('auth','humas'),'uses'=>'PenyetujuManager@toMahalum'));
Route::post('/tolak/{id}','PenyetujuManager@tolak')->before('auth');
Route::post('/toMahalum/{id}','PenyetujuManager@toMahalum')->before('auth');
Route::post('/toPerlengkapan/{id}','PenyetujuManager@toPerlengkapan')->before('auth');
Route::post('/setujui/{id}','PenyetujuManager@setujui')->before('auth');
Route::get('keteranganPenolakan/{id}',array('before'=>array('auth','penyetuju'),'uses'=>'PenyetujuManager@keteranganPenolakan'));
Route::get('keteranganPenerimaanHumas/{id}',array('before'=>array('auth','penyetuju'),'uses'=>'PenyetujuManager@keteranganPenerimaanHumas'));
Route::get('keteranganPenerimaanMahalum/{id}',array('before'=>array('auth','penyetuju'),'uses'=>'PenyetujuManager@keteranganPenerimaanMahalum'));
Route::get('keteranganPenerimaanPerlengkapan/{id}',array('before'=>array('auth','penyetuju'),'uses'=>'PenyetujuManager@keteranganPenerimaanPerlengkapan'));
Route::get('toPerlengkapan/{id}',array('before'=>array('auth','mahalum'),'uses'=>'PenyetujuManager@toPerlengkapan'));
Route::get('setujui/{id}',array('before'=>array('auth','perlengkapan'),'uses'=>'PenyetujuManager@setujui'));

//halaman approval civitas
Route::get('/approval',array('before'=>array('auth'),'uses'=>'RuanganManager@lihatForm'));

Route::get('hapusForm/{id}',array('before'=>array('auth'),'uses'=>'RuanganManager@hapusForm'));
Route::get('/humas',array('before'=>array('auth','humas'),'uses'=>'PenyetujuManager@humas','title'=>'Humas'));
Route::get('/perlengkapan',array('before'=>array('auth','perlengkapan'),'uses'=>'PenyetujuManager@perlengkapan','title'=>'Perlengkapan'));
Route::get('/mahalum',array('before'=>array('auth','mahalum'),'uses'=>'PenyetujuManager@mahalum','title'=>'Mahalum'));
Route::get('/history',array('before'=>array('auth','history'),'uses'=>'PenyetujuManager@history','title'=>'Mahalum'));

Route::get('/pdf',function()
{	
	define('BUDGETS_DIR', public_path('uploads/budgets')); // I define this in a constants.php file

	if (!is_dir(BUDGETS_DIR)){
	    mkdir(BUDGETS_DIR, 0755, true);
	}

	$html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';

	$outputName = str_random(10); // str_random is a [Laravel helper](http://laravel.com/docs/helpers#strings)
	$pdfPath = BUDGETS_DIR.'/'.$outputName.'.pdf';
	File::put($pdfPath, PDF::load($html, 'A4', 'portrait')->output());

	$data =array();
	Mail::send('template.blank', $data, function($message) use ($pdfPath){
	    $message->from('pplkb08@gmail.com', 'Laravel');
	    $message->to('ibrahimker@gmail.com');
	    $message->attach($pdfPath);
	});
	echo "haiiii";
});
