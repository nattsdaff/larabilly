<?php

// Rutas generadas por make:auth
Auth::routes();

// Rutas del front
Route::get('/', 'StaticController@index');

Route::get('faq', 'StaticController@faq');

Route::get('exito', 'StaticController@exito');

Route::get('logout', 'Auth\LoginController@logout');

// Rutas del panel de admin
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products', 'ProductController@store')->name('product.store');
    Route::get('/products/{id}/edit', 'ProductController@edit');
    Route::put('/products/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('product.destroy');
});