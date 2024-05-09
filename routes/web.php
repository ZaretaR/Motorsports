<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PostsController;
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
Route::post('/contact', [ContactController::class, 'verzenden']);
Route::get('/kalender', [KalenderController::class, 'kalender'])->name('kalender');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

//BLOG -> POSTS
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
