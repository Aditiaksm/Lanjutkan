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
	.'Laravel, emang keren.';
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