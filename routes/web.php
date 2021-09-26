<?php

/*
|--------------------------------------------------------------------------
| Web Routes For System
|--------------------------------------------------------------------------
*/
                        /*Vista principal del proyecto*/

Route::get('/','HomeController@index')->name('home');

/*-------------------------------------------------------------------------------------*/

/*+++++++++++++++++++++++++ Inicio Rutas de  paypal++++++++++++++++++++++++++++++++++++*/


Route::get('/checkout', 'PaymentController@index')->middleware('auth');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');
/*+++++++++++++++++++++++++ fin de rutas de paypal++++++++++++++++++++++++++++++++++++++*/

/*---------------------------------------------------------------------------------------*/

/*+++++++++++++++ inicio de rutas mostar productos el cliente+++++++++++++++++++++++*/

Route::get('/productos/{category?}','ProductController@show_products')->name('main.productos');
Route::get('/ver/{product?}','ProductController@show_product')->name('showProduct');
/*+++++++++++++++++++++++++ Inicio Rutas de  paypal++++++++++++++++++++++++++++++++++++*/

/*--------------------------------------------------------------------------------------*/

/*+++++++++++++++++++++++++ Inicio de rutas para el carrito++++++++++++++++++++++++++++++++++++*/
Route::get('/carrito', 'cartController@cart')->name('cart.index');
Route::post('/add', 'cartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
/*+++++++++++++++++++++++++ fin de rutas de carrito++++++++++++++++++++++++++++++++++++*/

/*---------------------------------------------------------------------------------------*/

/*+++++++++++++++++++++++++ Rutas del login++++++++++++++++++++++++++++++++++++++++++++*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*+++++++++++++++++++++++++ fin de rutas de login++++++++++++++++++++++++++++++++++++++*/

/*---------------------------------------------------------------------------------------*/
/*-------------------------------------------------------------------------------------------*/
/*------------------------------- inicio de rutas administrador----------------------------------*/
/*-----------------------------------------------------------------------------------------------*/



Route::get('/mystore',function(){
    return view('admin.home');
})->name('mystore.home')->middleware('auth');

/*+++++++++++++++++++++++++ Inicio Rutas de  proveedores administrador+++++++++++++++++++++++++*/
Route::get('/mystore/proveedor','SupplierController@index')->name('suplier.index')->middleware('auth');
Route::get('/mystore/proveedor/n','SupplierController@create')->name('suplier.create')->middleware('auth');
Route::post('/mystore/proveedor/nuevo','SupplierController@store')->name('suplier.store')->middleware('auth');
Route::get('/mystore/proveedor/{supplier}','SupplierController@edit')->name('suplier.edit')->middleware('auth');
Route::put('/mystore/proveedor/{supplier}','SupplierController@update')->name('suplier.update')->middleware('auth');


Route::delete('/mystore/proveedor/{supplier}','SupplierController@destroy')->name('suplier.destroy')->middleware('auth');
/*---------------------fin de rutas de proveedores administrador---------------------------*/

/*-----------------------------------------------------------------------------------------*/

/*+++++++++++++++++++++++ Inicio Routas de  productos administrador++++++++++++++++++++++++++++++*/
Route::get('/mystore/productos','ProductController@index')->name('product.index')->middleware('auth');
Route::get('/mystore/productos/nuevo','ProductController@create')->name('product.create')->middleware('auth');

Route::post('/mystore/productos/nuevo','ProductController@store')->name('product.store')->middleware('auth');
Route::get('/mystore/productos/{product}','ProductController@edit')->name('product.edit')->middleware('auth');

Route::put('/mystore/productos/{product}','ProductController@update')->name('product.update')->middleware('auth');

Route::delete('/mystore/productos/{product}','ProductController@destroy')->name('product.destroy')->middleware('auth');
/*---------------------fin de rutas de productos administrador----------------------------*/

/*----------------------------------------------------------------------------------------*/

/*---------------------Inicio de rutas de  Ventas administrador----------------------------*/

Route::get('/mystore/venntas','SalesController@index')->name('sales.sales_index')->middleware('auth');