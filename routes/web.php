<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Pastikan ini ada dan mengarah ke HomeController yang benar
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderController;


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
// routes/web.php
Route::get('/explore', function (Illuminate\Http\Request $request) {
    $destination = $request->query('destination');
    $city = $request->query('city');
    return view('explore', compact('destination', 'city'));
})->name('explore');

// routes/web.php
Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/wisata', function () {
    return view('wisata'); // Ini akan me-render file wisata.blade.php
});

Route::get('/order-detail', function () {
    return view('order-detail');
});


Route::get('/order-detail', function (Illuminate\Http\Request $request) {
    $departureDate = $request->departure_date;
    $returnDate = $request->return_date;
    $adults = $request->adults;
    $children = $request->children;

    return view('order-detail', compact('departureDate', 'returnDate', 'adults', 'children'));
})->name('order.detail');

Route::get('/order-detail', function () {
    return view('order-detail');
})->name('order.detail');

Route::get('/order-detail2', [OrderController::class, 'showDetail2'])->name('order.detail2');


Route::post('/order-detail2', [OrderController::class, 'storeCustomerInfo'])->name('order.detail2.submit');

Route::get('/order-detail3', function () {
    return view('order-detail3');
})->name('order.detail3');
