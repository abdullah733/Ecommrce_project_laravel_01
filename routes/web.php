<?php

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
Route::get('/','FrontendController@index');
Route::get('/about','FrontendController@about');
Route::get('/contact','FrontendController@Contact');

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add/product', 'ProductController@addproductview');
Route::post('add/product/insert', 'ProductController@addproductinsert');
