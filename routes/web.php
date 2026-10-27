<?php
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Ahmad Kholid",
        "nim"  => "13242520053",
        "prodi"=> "Teknologi Informasi",
        "gambar"=> "spiderman.jfif"
    ]);
});

Route::get('/kontak', function () {
    return view('Kontak', [
        "title" => "Kontak"
    ]);
});



Route::get('/berita',[BeritaController::class, 'tampilBerita']);


Route::get('/berita/{slug}',[BeritaController::class, 'getBerita']);
