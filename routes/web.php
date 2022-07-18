<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/common', function () {
    return view('admin.pages.common');
})->middleware(['auth'])->name('common');

Route::get('/blog', function () {
    return view('admin.pages.blog');
})->middleware(['auth'])->name('blog');

Route::get('/login', function () {
    return view('admin.pages.login');
})->middleware(['auth'])->name('login');

Route::get('/register', function () {
    return view('admin.pages.register');
})->middleware(['auth'])->name('register');

Route::get('/uploads', function () {
    return view('admin.pages.uploads');
})->middleware(['auth'])->name('uploads');

Route::get('/color', function () {
    return view('admin.pages.color');
})->middleware(['auth'])->name('color');

require __DIR__.'/auth.php';
