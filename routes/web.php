<?php

use Gloudemans\Shoppingcart\Facades\Cart;

// Rutas generadas por make:auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// Rutas de User Profile
Route::get('/profile','ProfileController@show')->name('profile.show');
Route::get('/profile/{id}/edit','ProfileController@edit');
Route::put('/profile/{id}','ProfileController@update')->name('profile.update');

// Rutas del front (estáticas)
Route::get('/', 'StaticController@index');
Route::get('faq', 'StaticController@faq');
Route::get('exito', 'StaticController@exito');
Route::get('checkout', 'StaticController@checkout');

// Rutas del Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.product');

// Rutas del Carrito
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');

Route::get('empty', function(){
    Cart::destroy();
});

// Rutas del panel de admin
Route::prefix('admin')->group(function() {
    Route::get('/', 'DashboardController@index')->name('admin.index');
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
    Route::get('/admins','AdminController@index');
    Route::get('/create', 'AdminController@create');
    Route::post('/admins', 'AdminController@store')->name('admins.store');
    Route::get('/admins/{id}/edit', 'AdminController@edit');
    Route::put('/admins/{id}', 'AdminController@update')->name('admin.update');
    Route::delete('/admins/{id}', 'AdminController@destroy')->name('admin.destroy');
});
