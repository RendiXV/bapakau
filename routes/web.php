<?php

use Illuminate\Support\Facades\Route;



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

Route::get('halaman-profil', function () {
    return view('about');
});

Route::get('halaman-2', function () {
    return 'Rendi Maulana';
});

// Route Parameter 
Route::get('halaman-3/{nama}/Jenis-kelamin/{jk}', function ($nama,$jk) {
    return 'halaman profile '. $nama . ' dengan jenis kelamin : ' . $jk ;
});

Route::get('halaman profile/{nama?}', function ($nama = "Blom ada nama") {
    return 'profile ' . $nama ;
});

// Route::get('halaman-profil-2/{nama}', function ($nama) {
//     $clk = 4;
//     return view('about', compact('nama', 'clk'));
// });

// Route::get('halaman-profil-2/{nama}/{umur}', function ($nama, $umur) {
//     return view('about', compact('nama', 'umur'));
// });

Route::get('order/{var1}/{var2}/{param3}', function ($a, $b, $c) {
    return view('pages.order', compact('a', 'b', 'c'));
});

Route::get('pesan/{menu?}/{jumlah?}', function ($a = "-", $b = "-" ) {
    return view('pages.pesan', compact('a', 'b'));
});

route::get('/pesan/{makanan?}/{minuman?}', function ($makanan = "Pesanan Kosong", $minuman = "kosong"){
    return view('pages.pesan' , compact('makanan', 'minuman'));
});

Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('facebook/{perkalian}-{nama}', 'LatihanController@facebook');
Route::get('nama', 'Siswa@siswa');

Route::get('BB/{berat_badan}/{tinggi_badan}', 'Siswa@BB');




