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

Route::get('/user-store', function () {
    $user= App\Models\User::find(4);
    $store=$user->store()->create([
        'name'=>'InfoProd',
        'description'=>'Loja de produtos de informática',
        'phone'=>'+24932932532',
        'mobile_phone'=>'+24932932532',
        'slug'=>'info-prod',
    ]);

    dd($store);
});
