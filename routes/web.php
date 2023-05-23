<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->to('/admin');
    }
    return redirect()->to('/login');
});
Route::get('/teste', function () {
    return view('login');
});

Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'PainelControllador@index')->name('painel');
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
        Route::get('/create', 'ProductsController@create')->name('create');
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
