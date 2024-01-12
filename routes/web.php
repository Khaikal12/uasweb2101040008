<?php

use App\Http\Controllers\HalamanNewsController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;


Route::resource('/category', KategoriController::class);
Route::resource('/news', NewsController::class);
Route::resource('/homepage', HomepageController::class);
Route::resource('/penulis', PenulisController::class);

Route::get('halamanNews', [HalamanNewsController::class, 'show'])->name('halamanNews');

Route::get('homepage', [NewsController::class, 'show'])->name('homepage');
Route::get('login', [LoginController::class, 'index'])->name('login'); // Menampilkan formulir login
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post'); // Proses autentikasi
Route::post('logout', [LoginController::class, 'logout'])->name('logout'); // Proses logout


Route::get('/homepage', function () {
    return view('homepage.index');
});

Route::get('/about', function () {
    return view('about.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('news', NewsController::class)->middleware('auth');
    Route::resource('category', KategoriController::class)->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage-index');
