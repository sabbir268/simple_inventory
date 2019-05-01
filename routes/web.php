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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/** Page routes */
Route::get('/products-recive', 'PageController@reciveProducts')->name('recive.products');


/** Insert routes */
Route::post('/products-add', 'SupplyingController@addToSupplying')->name('add.products'); //insert products to supplying table

Route::delete('/products-delete', 'SupplyingController@deleteFromSupplying')->name('delete.products'); //delete products to supplying table
