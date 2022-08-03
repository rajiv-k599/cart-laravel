<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartControllers;
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

Route::get('/', [PagesControllers::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ProductController::class, 'show'])->name('product');
Route::get('/cart', [CartControllers::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[CartControllers::class,'addToCart'])->name('add.to.cart');
Route::get('/delete-from-cart/{id}',[CartControllers::class,'delete'])->name('delete.cart');
Route::post('/update-from-cart/{id}', [CartControllers::class, 'update'])->name('update.from.cart');