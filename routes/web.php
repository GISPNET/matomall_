<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
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

Route::group(['prefix'=>'admin/stores'],function(){
     Route::get('/',[StoreController::class, 'index']);
     Route::get('/create',[StoreController::class, 'create']);
     Route::post('/create',[StoreController::class, 'store']);
     Route::get('/{id}',[StoreController::class, 'show']);
     Route::put('/{id}',[StoreController::class, 'updade']);
     Route::delete('/{id}',[StoreController::class, 'destroy']);
});
