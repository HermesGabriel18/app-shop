<?php

Route::get('/', 'TestController@welcome');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin/products', 'ProductController@index'); //Listado
// Route::get('/admin/products/create', ['as' => 'products.create', 'uses' => 'ProductController@create']); //Formulario
// Route::post('/admin/products', 'ProductController@store')->name('products.store'); //Registrar
// Route::get('/admin/products/{id}', 'ProductController@show')->name('products.show'); //Mostrar
// Route::get('/admin/products/{id}/edit', 'ProductController@edit')->name('products.edit'); //Formulario
// Route::put('/admin/products/{id}', 'ProductController@update')->name('products.update'); //Actualizar
// Route::delete('/admin/products/{id}', 'ProductController@destroy')->name('products.destroy'); //Eliminar

Route::resource('products', 'ProductController');
