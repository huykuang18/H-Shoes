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

Route::get('/','App\Http\Controllers\PageController@getIndex');

Route::get('shop/{type?}/{id?}','App\Http\Controllers\PageController@search');
Route::get('product-{id}','App\Http\Controllers\PageController@productDetail');

Route::get('cart/{action?}/{id?}','App\Http\Controllers\CartController@cart');
Route::post('cart/{action?}/{id?}','App\Http\Controllers\CartController@cart');

Route::get('checkout','App\Http\Controllers\PageController@checkout');
Route::post('checkout','App\Http\Controllers\PageController@order');
