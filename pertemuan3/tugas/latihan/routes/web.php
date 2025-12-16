<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Homepage - redirect to students
Route::get('/', function () {
    return redirect()->route('students.index');
});

// About Route
Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
})->name('about');

// Students CRUD routes
Route::resource('students', StudentController::class);

// Posts CRUD routes
Route::resource('posts', PostController::class);

// Categories CRUD routes
Route::resource('categories', CategoryController::class);