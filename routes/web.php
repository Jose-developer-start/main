<?php

/*
|--------------------------------------------------------------------------
| Web Routes For System
|--------------------------------------------------------------------------
*/

Route::get('/','HomeController@index')->name('home'); //Vista principal



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

//rutas de el proveedor
//Route::get('/', 'SupplierController@index')->name('proveerdor.index');
Route::get('/mystore/proveedores','SupplierController@index')->name('suplier.index')->middleware('auth');
Route::get('/mystore/proveedores/nuevo','SupplierController@create')->name('suplier.create')->middleware('auth');
Route::post('/mystore/proveedores','SupplierController@store')->name('suplier.store')->middleware('auth');
Route::get('/mystore/proveedores/{supplier}','SupplierController@edit')->name('suplier.edit')->middleware('auth');

Route::put('/mystore/proveedores/{supplier}','SupplierController@update')->name('suplier.update')->middleware('auth');
Route::delete('/mystore/proveedores/{supplier}','SupplierController@destroy')->name('suplier.destroy')->middleware('auth');
//fin de las rutas de proveedor

//rutas de ventas

Route::get('/mystore/sales','SalesController@index')->name('sales.sales_index')->middleware('auth');

//Routas del login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routas administrador
Route::get('/mystore',function(){
    return view('admin.home');
})->name('mystore.home')->middleware('auth');

//Routas productos
Route::get('/mystore/productos','ProductController@index')->name('product.index')->middleware('auth');
Route::get('/mystore/productos/nuevo','ProductController@create')->name('product.create')->middleware('auth');

Route::post('/mystore/productos/nuevo','ProductController@store')->name('product.store')->middleware('auth');
Route::get('/mystore/productos/{product}','ProductController@edit')->name('product.edit')->middleware('auth');

Route::put('/mystore/productos/{product}','ProductController@update')->name('product.update')->middleware('auth');

Route::delete('/mystore/productos/{product}','ProductController@destroy')->name('product.destroy')->middleware('auth');