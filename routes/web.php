<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/catalog','as' => 'catalog.'], function (){
    Route::get('/add_to_cart/{product_id}/{quantity}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/delete_from_cart/{product_id}/{session_id}', [App\Http\Controllers\CartController::class, 'deleteFromCart'])->name('deleteFromCart');
    Route::get('/c/{slug}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
    Route::get('/p/{product_slug}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
});
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('order.store');
Route::get('pages/check_slug', [App\Http\Controllers\PagesController::class, 'check_slug'])
    ->name('pages.check_slug');
Route::group(['middleware' => ['auth', 'isAdmin'],'prefix' => '/dashboard','as' => 'admin.'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\FrontendController::class, 'index'])->name('home');
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::put('/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'products', 'as' => 'products.'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('create');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('store');
        Route::put('/update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\SliderController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create');
        Route::get('/show/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
        Route::put('/update/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\OrderController::class, 'create'])->name('create');
        Route::get('/show/{number}', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\OrderController::class, 'store'])->name('store');
        Route::put('/update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'statuses', 'as' => 'statuses.'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\OrderStatusController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\OrderStatusController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\OrderStatusController::class, 'edit'])->name('edit');
        Route::post('/create', [\App\Http\Controllers\Admin\OrderStatusController::class, 'store'])->name('store');
        Route::put('/update/{id}', [\App\Http\Controllers\Admin\OrderStatusController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [\App\Http\Controllers\Admin\OrderStatusController::class, 'delete'])->name('delete');
    });
});
