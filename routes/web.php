<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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
Route::get('/Team', [TeamController::class, "Team"]);
Route::get('/Contact', [ContactController::class, "Contact"]);
Route::get('/Calender', [CalenderController::class, "Calender"]);
Route::get('/Blog', [BlogController::class, "Blog"]);
Route::get('/Profile', [ProfileController::class, "Profile"]);