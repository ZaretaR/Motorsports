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

Route::get('/', function () {return view('index');});
Route::get('/team', function () {return view('team');});
Route::get('/contact', function () {return view('contact');});
Route::get('/kalender', function () {return view('kalender');});
Route::get('/profile', function () {return view('profile');});