<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\Order\OrderViewer;
use App\Http\Controllers\Site\Order\OrderRepository;
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

// ============================================================================ ORDER =========================================================================================
Route::group([
    'middleware'  => 'local',
    'prefix' => 'order'
], function(){
    Route::get('pay/{hash}', [OrderViewer::class, 'pay'])->name('order.pay');
    Route::get('checkout', [OrderViewer::class, 'checkout'])->middleware('checkout')->name('order.checkout');
    Route::get('cart', [OrderViewer::class, 'cart'])->name('order.cart');
    Route::post('order_save', [OrderRepository::class, 'save'])->name('order.orderStore');
    Route::get('add_to_cart/{id}', [OrderController::class, 'addProductToCart'])->name('order.addProductToCart');
    Route::get('quick_view_cart', [OrderController::class, 'quickViewCart'])->name('order.quickViewCart');
    Route::get('clear_cart', [OrderController::class, 'clearCart'])->name('order.clearCart');
    Route::get('cancel/{id}', [OrderController::class, 'cancelOrder'])->name('order.cancelOrder');
    Route::get('user_import', [OrderController::class, 'import'])->name('order.userImport');
    Route::get('view/{id}', [OrderViewer::class, 'view'])->name('order.view')->middleware('auth');
});

Route::group([
    'middleware'  => 'local'
], function (){
    Route::get('/', [MainController::class, 'index'])->name('shop');
    Route::get('local/{lang}', [MainController::class, 'local'])->name('local');
    Route::get('search', [MainController::class, 'search'])->name('search');
    Route::post('search/result', [HomeController::class, 'search'])->name('search.test');
    Route::get('autocomplate', [HomeController::class, 'autocomplate'])->name('search');
    Route::get('category/{id}', [MainController::class, 'category'])->name('category');
    Route::get('view/{id}', [MainController::class, 'view'])->name('view');
    Route::get('logout', [LoginController::class, 'logout'])->name('get_logout');

});








Route::get('administration', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'admin']);


Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'admin'
], function (){
    Route::get('xmls', [ParserController::class, 'index'])->name('xmls');
    Route::post('xml/store', [ParserController::class, 'store'])->name('admin.xml.store');
    Route::get('xml/delete/{xml}', [ParserController::class, 'destroy'])->name('admin.xml.delete');
    Route::get('parse/{link}', [AdminController::class, 'parse'])->name('parse');
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('category/list', [CategoryController::class, 'listCategory'])->name('admin.category.list');
    Route::post('category/change', [CategoryController::class, 'change'])->name('admin.category.change');
    Route::get('category/csv', [CategoryController::class, 'export'])->name('admin.category.csv');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::get('category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    Route::put('category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order');
    Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order');
    Route::get('order/{id}', [AdminOrderController::class, 'show'])->name('admin.order.show');
    Route::get('order/delete/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.delete');
    Route::get('product/create', [AdminProductController::class, 'create'])->name('admin.product.create');
    Route::get('product/elasticsearch/test', [AdminProductController::class, 'elasticsearch'])->name('admin.product.elasticsearch');
    Route::get('product/csv', [AdminProductController::class, 'export'])->name('admin.product.csv');
    Route::get('product', [AdminProductController::class, 'index'])->name('admin.product');
    Route::post('product/store', [AdminProductController::class, 'store'])->name('admin.product.store');
    Route::get('product/{id}', [AdminProductController::class, 'show'])->name('admin.product.show');
    Route::put('product/update/{product}', [AdminProductController::class, 'update'])->name('admin.product.update');
    Route::get('product/delete/{product}', [AdminProductController::class, 'destroy'])->name('admin.product.delete');
    Route::get('products/select_category', [AdminProductController::class, 'selectCategory'])->name('admin.product.select_category');
    Route::post('products/change/category', [AdminProductController::class, 'changeCategory'])->name('admin.product.change_category');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware(['local', 'auth']);
Route::get('/edit', 'HomeController@edit')->name('user.edit')->middleware(['local', 'auth']);
Route::post('/update', 'HomeController@update')->name('user.update')->middleware(['local', 'auth']);

