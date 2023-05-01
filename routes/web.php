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

Route::get('/user-save', function () {
    $user= new App\Models\User();
    $user->name="Usuario Teste 2";
    $user->email="usuario@teste2.com";
    $user->email_verified_at=now();
    $user->password=Illuminate\Support\Facades\Hash::make("password");
    $user->save();

    return $user;
});
