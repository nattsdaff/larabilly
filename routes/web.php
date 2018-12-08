<?php

// Rutas generadas por make:auth
Auth::routes();

// Rutas del front
Route::get('/', 'StaticController@index');

Route::get('product', 'StaticController@product');

Route::get('store', 'StaticController@store');

Route::get('faq', 'StaticController@faq');

Route::get('exito', 'StaticController@exito');

Route::get('logout', 'Auth\LoginController@logout');

// Rutas del panel de admin
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Rutas de Productos
    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products', 'ProductController@store')->name('product.store');
    Route::get('/products/{id}/edit', 'ProductController@edit');
    Route::put('/products/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('product.destroy');
    // Rutas de Categorías
    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/create', 'CategoryController@create');
    Route::post('/categories', 'CategoryController@store')->name('categories.store');
    Route::get('/categories/{id}/edit', 'CategoryController@edit');
    Route::put('/categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/categories/{id}', 'CategoryController@destroy')->name('category.destroy');
    // Rutas de Admin
    Route::get('/admins','AdministratorController@index');
    Route::get('/create', 'AdministratorController@create');
    Route::post('/admins', 'AdministratorController@store')->name('admins.store');
    Route::get('/admins/{id}/edit', 'AdministratorController@edit');
    Route::put('/admins/{id}', 'AdministratorController@update')->name('admin.update');
    Route::delete('/admins/{id}', 'AdministratorController@destroy')->name('admin.destroy');
});
