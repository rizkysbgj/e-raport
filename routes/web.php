<?php

// Route::get('/', function () {
//     return view('first'); //welcome.blade.php
// });

Route::get('/', function(){
       if (Auth::check())
       {
           return view('home');
       }
       else
       {
           return view('first');
       }
   });

Route::get('master', function () {
    return view('/layouts/master'); //master template
});

Route::get('/nilai/kelas', function() {
    return view('nilai/kelas');
});

Route::get('about', function () {
    return view('welcome'); //about.blade.php
});

Auth::routes();

// Route::get('/sampah', 'SampahController@index');
// Route::get('/sampah/{id}', 'SampahController@show');
// Route::delete('/sampah/{id}', 'SampahController@delete');

Route::get('/home', 'HomeController@index');

// Route::post('/daftar',  'DaftarController@store');
// Route::get('/daftar', 'DaftarController@create');
//
// Route::get('/nasabah', 'NasabahController@index');
// Route::get('/nasabah/{id}', 'NasabahController@show');
// Route::delete('/nasabah/{id}', 'DaftarController@delete');

Route::get('/nilai/siswa', 'SiswaController@index')-> name('nilai.siswa');
Route::get('/nilai/siswa/{kelas}', 'SiswaController@show');

Route::get('/nilai/create/{id}', 'NilaiController@create')-> name('nilai.create');
Route::post('/nilai/create/{id}', 'NilaiController@store')-> name('nilai.store');
Route::get('/nilai/update/{nisn}', 'NilaiController@show')-> name('nilai.update');
Route::post('/nilai/update/{nisn}', 'NilaiController@update')-> name('nilai.update');
