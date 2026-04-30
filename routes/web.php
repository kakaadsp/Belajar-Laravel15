<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route View Langsung (Video #4)
Route::get('/', function () {
    return view('beranda');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// Route Menggunakan Controller (Video #5)
Route::get('/product', [ProductController::class, 'get_product']);
Route::get('/product/tambah', [ProductController::class, 'tambahProduct']);