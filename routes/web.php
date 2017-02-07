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

Route::get('/products', 'ProductController@getIndex');

Route::get('/products/show/{id}', 'ProductController@getShow');

Route::post('/products/sell/{id}', 'ProductController@postSell');

Route::post('/products/restock/{id}', 'ProductController@postRestock');

Route::get('/products/add', 'ProductController@getAdd');

Route::post('/products/addProduct', 'ProductController@postAddProduct');

Route::post('/products/delete/{id}', 'ProductController@postDeleteProduct');

Route::get('/products/edit/{id}', 'ProductController@getEdit');

Route::post('products/editProduct/{id}', 'ProductController@postEditProduct');