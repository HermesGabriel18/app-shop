<?php

Route::get('/', 'TestController@welcome');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){
	Route::resource('/products', 'ProductController');
	Route::get('/products/{product}/images', 'ProductImageController@index')->name('productImages.index');
	Route::get('/products/{product}/images/create', 'ProductImageController@create')->name('productsImages.create');
});


