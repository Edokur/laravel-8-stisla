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

//laravel 8 multirole

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/forgot_password', function () {
    return view('auth.forgot_password');
});

Route::get('/reset_password', function () {
    return view('auth.reset_password');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
