<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalenderController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/team', [TeamController::class, "team"]);
Route::get('/contact', [ContactController::class, "contact"]);
Route::get('/calender', [CalenderController::class, "calender"]);
Route::get('/blog', [BlogController::class, "blog"]);

//Route::get('/', [LoginController::class, "login"]);
//Route::get('/', [SignInController::class, "sing in"]);