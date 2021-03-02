<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PropertiesController;
use App\Http\Controllers\Frontend\ContactController;
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


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend routes//////////////////
Route::get('/', [HomeController::class,'index']);
Route::get('about-us',[AboutController::class,'index'])->name('about.us');
Route::get('properties',[PropertiesController::class,'index'])->name('properties');
Route::get('blog',[BlogController::class,'index'])->name('blog');
Route::get('contact',[ContactController::class,'index'])->name('contact');