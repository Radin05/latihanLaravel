<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;


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

Route::get('/post', function () {
    $post = Post::all();

    // $post = Post::find(4);

    // $post = new Post;
    // $post->title = "cara menjadi jadian";
    // $post->content = "temabak";
    // $post->save();

    return view('tampil_post', compact('post'));
});

Route::get('/barang', function () {
    $barang = Barang::all();
    // return $barang;
    
    return view('tampil_barang', compact('barang'));

});

Route::get('/siswa', function () {
    $siswa = Siswa::all();

    // $siswa = Siswa::where('jenis_kelamin', 'like', '%perempuan%')->get();

    // $siswa = new Siswa;
    // $siswa->nama = "tora";
    // $siswa->jenis_kelamin = "laki-laki";
    // $siswa->alamat = "Bandung";
    // $siswa->agama = "islam";
    // $siswa->telepon = 88898701;
    // $siswa->email = "tono@gmail.com";
    // $siswa->save();

    // return $siswa;

    return view('tampil_siswa', compact('siswa'));

});
