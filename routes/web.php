<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
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
Route::get('/', [MainController::class, 'index'])->name('shop');
Route::get('category/{id}', [MainController::class, 'category'])->name('category');
Route::get('view/{id}', [MainController::class, 'view'])->name('view');
Route::get('checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('order_store', [OrderController::class, 'order_store'])->name('order_store');
Route::get('cart', [OrderController::class, 'index'])->name('cart');
Route::get('add_to_cart/{id}', [OrderController::class, 'addProductToCart'])->name('addProductToCart');

