<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AuthController;
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
// Admin Routes

Route::delete('/wishlist/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist.index');

Route::get('/admin{id}', [PostController::class, 'viewadmin'])->name('wishlist.admin');

Route::post('wishlist/add/{post}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');

Route::post('wishlist/add/{post}', [AuthController::class, 'addToWishlist'])->name('wishlist.add');


Route::get('/posts/checkout/{id}', [App\Http\Controllers\PostController::class, 'checkout'])->name('portofolio.checkout');

Route::get('/portofolio/create', [PostController::class, 'create'])->name('portofolio.create');

Route::get('/portofolio/admin}', [PostController::class, 'viewAdmin'])->name('posts.admin');

Route::get('/portofolio/berita', [PostController::class, 'berita'])->name('portofolio.berita');

// Authentication Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'post'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Other routes for PostController
Route::resource('portofolio', PostController::class);
