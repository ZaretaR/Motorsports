<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalenderController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/kalender', [KalenderController::class, 'kalender'])->name('kalender');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');