<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;

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

Auth::routes();

Route::get('/landing', function(){
    return view('landing.default');
});

Route::get('/', [App\Http\Controllers\Web\HomePageController::class, 'index']);

Route::prefix('seller')->name('seller.')->namespace('App\Http\Controllers\Seller')->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'DashboardController@index')->name('index');
    });

    Route::prefix('/orders')->name('orders.')->group(function () {
        Route::get('/', 'OrdersController@index')->name('index');
        Route::get('/{id}', 'OrdersController@show')->name('show');
        Route::post('/{id}', 'OrdersController@update')->name('update');
    });

    Route::prefix('/stores')->name('store.')->group(function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create')->middleware('userhasonestore');
        Route::post('/', 'StoreController@store')->name('store')->middleware('userhasonestore');
        Route::get('/{id}', 'StoreController@edit')->name('edit');
        Route::delete('/{id}', 'StoreController@destroy')->name('destroy');
        Route::post('/{id}', 'StoreController@update')->name('update');
    });
    Route::prefix('/products')->name('product.')->group(function () {
        Route::get('/', 'ProductsController@index')->name('index');
        Route::get('/add', 'ProductsController@create')->name('add');
        Route::post('/', 'ProductsController@store')->name('store');
        Route::get('/{id}', 'ProductsController@edit')->name('edit');
        Route::delete('/{id}', 'ProductsController@destroy')->name('destroy');
        Route::post('/{id}', 'ProductsController@update')->name('update');
    });
    Route::prefix('/categories')->name('category.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/', 'CategoryController@store')->name('store');
        Route::get('/{id}', 'CategoryController@edit')->name('edit');
        Route::delete('/{id}', 'CategoryController@destroy')->name('destroy');
        Route::post('/{id}', 'CategoryController@update')->name('update');
    });
    Route::prefix('/photos/remove')->name('photos.')->group(function () {
        Route::post('/{photoId}', 'ProductPhotoController@removePhoto')->name('removePhoto');
    });
});

Route::prefix('products')->name('product.')->namespace('App\Http\Controllers\Web')->group(function () {
    Route::get('/', 'ProductsController@index')->name('index');
    Route::get('/{slug}', 'ProductsController@show')->name('details');
});

Route::prefix('cart')->name('cart.')->namespace('App\Http\Controllers\Web')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('/add', 'CartController@add')->name('add');
    Route::get('/remove/{slug}', 'CartController@remove')->name('remove');
});

Route::prefix('checkout')->name('checkout.')->namespace('App\Http\Controllers\Web')->group(function () {
    Route::get('/', 'CheckoutController@index')->name('index');
});

Route::prefix('stores')->name('store.')->namespace('App\Http\Controllers\Web')->group(function () {
    Route::get('/', 'StoreController@index')->name('index');
    Route::get('/{slug?}', 'StoreController@show')->name('details');
});


Route::prefix('customer')->name('customer.')->namespace('App\Http\Controllers\Web')->group(function () {
    Route::prefix('/invoice')->name('invoice.')->group(function () {
        Route::get('/{reference}', 'InvoiceController@index')->name('index');
    });
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'CustomerDashboardController@index')->name('index');
    });
    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::post('/', 'CustomerProfileController@update')->name('update');
    });
});
Route::prefix('customer')->name('customer.')->namespace('App\Http\Controllers\Auth\Customer')->group(function () {
    Route::prefix('/register')->name('register.')->group(function () {
        Route::get('/', 'CustomerAuthController@index')->name('index');
    });
});
Route::post('paypal', [\App\Http\Controllers\Payment\CheckoutPaypalController::class, 'postPaymentWithpaypal'])->name('addmoney.paypal');
Route::get('paypal',[\App\Http\Controllers\Payment\CheckoutPaypalController::class,'getPaymentStatus'])->name('payment.status');

