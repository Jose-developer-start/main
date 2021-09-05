<?php

/*
|--------------------------------------------------------------------------
| Web Routes For System
|--------------------------------------------------------------------------
*/

Route::get('/','HomeController@index'); //Vista principal



Route::get('/checkout', 'PaymentController@index')->middleware('auth');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');

//Routas de productos
Route::get('/productos/{category?}','ProductController@show_products')->name('main.productos');
Route::get('/ver/{product?}','ProductController@show_product')->name('showProduct');
//Carrito
Route::get('/carrito', 'cartController@cart')->name('cart.index');
Route::post('/add', 'cartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

//Routas del login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
