<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActionController;
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
Route::get('/',function(){
    return "hello ";
});

Route::get('/', [ActionController::class, 'index']);


//Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::middleware(['isAdmin'])->group(function () {
    // Your routes go here
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/profile', 'AdminProfileController@profile');
    // Add more routes as needed
});
Route::middleware(['isUser'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'profile']);
    Route::get('/user/comments', [UserController::class, 'comment']);
    // Add more user routes as needed
});
