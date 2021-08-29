<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/','MainController@index'); //Vista principal



Route::view('/checkout', 'checkout-page')->middleware('admin');;
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');

//Routas

Route::get('/productos','MainController@show')->name('main.productos');


//Routas del login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
