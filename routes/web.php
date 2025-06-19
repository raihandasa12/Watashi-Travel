<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Pastikan ini ada dan mengarah ke HomeController yang benar

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

// Rute untuk Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Navigasi Atas
Route::get('/press-release', [HomeController::class, 'pressRelease'])->name('press_release');
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/events', [HomeController::class, 'events'])->name('events');

// Rute untuk Navigasi Utama
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact_us');

// Rute untuk Halaman Autentikasi (Register & Login)
// Jika Anda tidak menggunakan sistem autentikasi Laravel (seperti Breeze/Jetstream)
// dan hanya ingin menampilkan form register/login sederhana,
// pastikan metode 'register' dan 'login' ada di HomeController Anda
// dan mengembalikan view yang sesuai (contoh: view('auth.register') atau view('register')).
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/wisata', [HomeController::class, 'wisata'])->name('wisata');
