<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/','MainController@index'); //Vista principal



Route::get('/checkout', 'PaymentController@index')->middleware('auth');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');

//Routas

Route::get('/productos','MainController@show')->name('main.productos');
//Carrito
Route::get('/carrito', 'cartController@cart')->name('cart.index');
Route::post('/add', 'cartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

//Routas del login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
