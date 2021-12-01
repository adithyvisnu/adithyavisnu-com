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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () { return view('home'); })->name('home');
    Route::get('/auth', function () { return view('login_register'); })->name('auth');
    Route::post('/register', 'LoginRegisterController@register')->name('register');
    Route::post('/login', 'LoginRegisterController@login')->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', 'LoginRegisterController@logout')->name('logout');
    Route::resource('stocks', StocksController::class);
    Route::resource('companies', CompanyController::class);
});

Route::get('/laravel', function () { return view('laravel'); });