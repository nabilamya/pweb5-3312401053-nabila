<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webmaya', function () {
    return view('image');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listitem', [ItemListController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/home', function () {
    return view('pages.home');
});




Route::get('/home', [HomeController::class, 'index']);
