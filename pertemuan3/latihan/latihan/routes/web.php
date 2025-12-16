<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// About page
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

// Posts Resource
Route::resource('posts', PostController::class);

// Categories Resource
Route::resource('categories', CategoryController::class);