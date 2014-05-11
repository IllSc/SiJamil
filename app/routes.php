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
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '1';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '3112';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '1';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '3113';
	$ruangan->kapasitas = '50';

	$ruangan->nomor_ruangan = '2301';
	$ruangan->kapasitas = '30';

	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '1';
	$ruangan->save();

	$ruangan = new Ruangan;

	$ruangan->nomor_ruangan = '2301';
	$ruangan->kapasitas = '30';

	$ruangan->nomor_ruangan = '2302';
	$ruangan->kapasitas = '40';

	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2302';
	$ruangan->kapasitas = '30';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2303/2304';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2305';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2306';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '3';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2401';
	$ruangan->kapasitas = '30';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '4';
	$ruangan->save();


	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2402';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2403/2404';
	$ruangan->kapasitas = '70';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2405';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2406';
	$ruangan->kapasitas = '40';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '4';
	$ruangan->save();

	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2502';
	$ruangan->kapasitas = '60';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '5';
	$ruangan->save();
	
	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2601';
	$ruangan->kapasitas = '30';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '6';
	$ruangan->save();
	
	$ruangan = new Ruangan;
	$ruangan->nomor_ruangan = '2602';
	$ruangan->kapasitas = '75';
	$ruangan->fasilitas = 'AC, kursi , proyektor, speaker, komputer';
	$ruangan->lantai = '6';
	$ruangan->save();


});

Route::get('auth',function(){echo(Auth::user()->role);});
Route::get('/seed/forms',function(){
	$form = new Isian;
	$faker = Faker::create();
	$form->email = $faker->safeEmail;
	$form->tanggal = $faker->date();
	$form->jam_peminjaman = $faker->time();
	$form->keperluan = $faker->sentence($nbWords = 6);
	$form->fasilitas = $faker->sentence($nbWords = 2);
	$form->jumlah_peserta = 29;
	$form->status = 'disamakan';

	$pengguna = User::find(4);
	$ruangan = Ruangan::find(9);

	$form->ruangan()->associate($ruangan);
	$form->user()->associate($pengguna);
	$form->save();

});
Route::get('/seed/penyetuju',function(){
	$user = new User;
	$user->name = 'Seseorang';
	$user->password = Hash::make('234');
	$user->role = 'Penyetuju';
	$user->save();
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

Route::filter('penyetuju',function()
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

Route::get('/hahaha', function()
{
    $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->download('my_pdf');
});
