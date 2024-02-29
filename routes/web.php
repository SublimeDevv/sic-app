<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginTestController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

//Primera forma de proteger rutas
Route::get('/noauth', [TestController::class, 'index'])->name('noauth.index');
Route::get('/alumnos', [StudentController::class, 'index'])->name('students.index')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::post('/images', [ImageController::class, 'store'])->name('images.store');

Route::get('/{user:name}', [PostController::class, 'index'])->name('posts.index');

//Segunda forma de proteger rutas
Route::middleware(['auth'])->group(function () {
    Route::get('/alumnos/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/alumnos', [StudentController::class, 'store'])->name('students.store');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::resource('estudiantes', StudentController::class);
