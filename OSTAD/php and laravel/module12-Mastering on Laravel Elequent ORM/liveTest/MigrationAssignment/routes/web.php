<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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

// routes/web.php

use App\Http\Controllers\ProductController;
use App\Models\Post;

Route::get('/',function(){
    //$posts = Post::all();
    $users = User::with('posts')->get();
    $post = Post::with('user')->whereId(3)->first();
    return $post;
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/update', [ProductController::class, 'update'])->name('products.update');


Route::get('/products/{id}/sell', [ProductController::class, 'sell'])->name('products.sell');
Route::post('/products/sale', [ProductController::class, 'sellUpdate'])->name('products.sold');

