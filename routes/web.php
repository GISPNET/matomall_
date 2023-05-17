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

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'PainelControllador@index')->name('admin.painel');
    Route::prefix('/stores')->group(function () {
        Route::get('/', 'StoreController@index')->name('admin.stores');
        Route::get('/create', 'StoreController@create')->name('admin.store.create');
        Route::post('/', 'StoreController@store')->name('admin.store.store');
        Route::get('/{id}', 'StoreController@edit')->name('admin.store.edit');
        Route::delete('/{id}', 'StoreController@destroy')->name('admin.store.destroy');
        Route::post('/{id}', 'StoreController@update')->name('admin.store.update');
    });

});
