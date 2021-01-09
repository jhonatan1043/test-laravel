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
    return view('home',['current' => 0]);
});

Route::get('/categories', function(){
    return view('categories',['current' => 1]);
});

Route::get('/products', function(){
    return view('products',['current' => 2]);
});

Route::get('/locations', function(){
    return view('locations',['current' => 3]);
});