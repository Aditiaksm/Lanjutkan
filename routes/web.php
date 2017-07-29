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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',function(){
	return'<h1>Hola</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren banget.';
});

Route::get('corel',function() {
	return view('about');
});

Route::get('/about/1',function() {
	return view('about.satu');
});

Route::get('/about/2',function() {
	return view('about.dua');
});

Route::get('/about/3',function() {
	return view('about.tiga');
});

Route::get('/about/{nama}/{sekolah}/{umur}',function($a,$b,$c) {
	return 'Nama saya :'.$a. '<br>
			Sekolah di :'.$b. '<br>
			Umur :'.$c;
});

Route::get('/about/{nama}',function($a) {
	return 'Ini halaman about '.$a='john';
});

Route::get('testmodel',function(){
	$a = App\Post::all();
	return $a;
});

Route::get('testmod',function(){
	$a = App\Post::find(1);
	return $a;
});

Route::get('dua',function(){
	$a = App\Post::where('title','like','%cepat nikah%')->get();
	return $a;
});

Route::get('tiga',function(){
	$Post = App\Post::find(1);
	$Post->title = "Ciri keluarga sakinah";
	$Post->save();
	return $Post;
});

Route::get('looks',function(){
	$Post = App\Post::find(1);
	$Post->delete();
	return $Post;
});

Route::get('empat',function(){
	$aa = new App\Post;
	$aa->title="7 amalan pembuka jodoh";
	$aa->content="sholat malam,sedekah,puasa subuh,silaturahmi,senyum,doa,tobat";
	return $aa;
});

Route::get('cektampilan',function(){
	return view('layouts.master');
});

route::get('/orangtua',function(){
	$ortu = App\Orangtua::all();
	foreach ($ortu as $key) {
		echo $key->namaayah;
		echo " dengan ";
		echo $key->namaibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
			echo "<li>".$data->nama."</li>";
		}
			echo "<hr>";
	}
});

route::get('/coba','MyController@index');
route::get('/cobain','MyController@tampilmodel');
route::get('/cobaae','MyController@tampilview');
route::get('/ngehe','MyController@percobaan');