<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return "Adithya Visnu Prasetyo Putra";
});

Route::get('/home', "HomeController@index")->name('index');

Route::post('/matkul', "HomeController@postMatkul");

Route::get('/laravel', function () {
    return view('laravel');
});
