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

// route basic
Route::get('/tes', function () {
    return '<h1>halo</h1>'
    . 'selamat <br>'
    . 'datang';
});

// introduce
Route::get('/biodata', function () {
    return '<b> BIODATA </b><br>' 
    . 'nama : radin <br>'
    . 'kelas : 11 rpl 1 <br>'
    . 'umur : 15 <br>'
    . 'status : belum nikah <br>'
    . 'cita-cita : masuk surga <br>';
});

// route basic to view
Route::get('/animals', function(){
    $king = "lion";
    $hewan = ["monkey","dragon","tiger"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('/fruit', function(){
    $buaah = ["strawbary","manggo","pear"];
    return view('fruit_page', ['buah' => $buaah]);
});

// route parameter
Route::get('product/{name}', function($name){
    return "pruduk: $name";
}); 

// latihan
Route::get('{nama}/{bb}/{tb}', function($nama, $bb, $tb){
    $bmi = $bb / (($tb/100)**2);
    if ($bmi > 30) {
        $ket = "obesitas";
    }elseif ($bmi > 25) {
        $ket = "kelebihan";
    }elseif ($bmi > 18.5) {
        $ket = "pas";
    }elseif ($bmi < 18.5) {
        $ket = "kurang";
    }

    return "nama : $nama <br>"
    . "bb : $bb <br>"
    . "tb : $tb <br>"
    . "bmi : $bmi <br>"
    . "keterangan : $ket ";
});

// route opotional parameter
Route::get('myname/{nama?', function($a = "radin"){
    return "my name is $a";
});