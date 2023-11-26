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

//Route::get('/', function () {
//    return "hello world";
//});
//Route::get('/', [\App\Http\Controllers\ActionController::class, 'index']);

Route::get('/', [\App\Http\Controllers\PortfolioController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\PortfolioController::class, 'home'])->name('home');
Route::get('/contact', [\App\Http\Controllers\PortfolioController::class, 'contact'])->name('contact');
Route::get('/projects', [\App\Http\Controllers\PortfolioController::class, 'projects'])->name('projects');
Route::get('/About', [\App\Http\Controllers\PortfolioController::class, 'about'])->name('about');
