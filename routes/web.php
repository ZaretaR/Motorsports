<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\PostLikeController;

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
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware('guest');

//BLOG -> POSTS
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index')->middleware('auth');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create')->middleware('auth');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show')->middleware('auth');
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update')->middleware('auth');
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy')->middleware('auth');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit')->middleware('auth');

//PROFILE
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post')->middleware('guest');
Route::get('/aanmelden', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/aanmelden', [AuthController::class, 'handleRegister'])->name('register.post')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//LIKES
Route::post('/posts/{post}/like', [PostLikeController::class, 'like'])->name('posts.like')->middleware('auth');
Route::delete('/posts/{post}/unlike', [PostLikeController::class, 'unlike'])->name('posts.unlike')->middleware('auth');

//EVENTS
Route::get('/kalender', [EventController::class, 'myCalendar'])->name('kalender.index')->middleware('auth');