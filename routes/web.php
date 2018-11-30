<?php

// Rutas generadas por make:auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas del front
Route::get('/', 'StaticController@index');

Route::get('faq', 'StaticController@faq');

Route::get('exito', 'StaticController@exito');

Route::get('logout', 'Auth\LoginController@logout');

// Rutas del panel de admin

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.index');
});