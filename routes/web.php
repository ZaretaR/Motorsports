<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('home');
Route::get('/team', function () {return view('team');})->name('team');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/kalender', function () {return view('kalender');})->name('kalender');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/profile', function () {return view('profile');})->name('profile');