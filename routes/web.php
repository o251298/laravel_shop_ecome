<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminOrderController;
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
Route::get('logout', [LoginController::class, 'logout'])->name('get_logout');
Route::get('quick_view_cart', [OrderController::class, 'quickViewCart'])->name('quickViewCart');
Route::get('clear_cart', [OrderController::class, 'clearCart'])->name('clear_cart');
Route::get('user_import', [OrderController::class, 'import'])->name('user_import');

Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'admin'
], function (){
    Route::get('main', [AdminController::class, 'index'])->name('admin');
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::get('category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    Route::put('category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order');
    Route::get('order/{id}', [AdminOrderController::class, 'show'])->name('admin.order.show');
    Route::get('order/delete/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.delete');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
