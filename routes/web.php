<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/', [PagesController::class, "redirect"])->name("redirect");

//Dutch Site
Route::get('/nl/landing', [PagesController::class, "welcome"])->name("welcome");

//English Site
Route::get('/en/landing', [PagesController::class, "welcome"])->name("welcome");