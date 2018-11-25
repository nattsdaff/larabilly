<?php

// Rutas generadas por make:auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas del front
Route::get('/', 'StaticController@index');

Route::get('faq', 'StaticController@faq');

Route::get('exito', 'StaticController@exito');

// Route::get('register', 'RegisterController@show');
// Route::post('register', 'RegisterController@store');


// Rutas del panel de admin
Route::get('cms-mobili/', 'admin\AdminIndexController@show');
Route::get('cms-mobili/login', 'admin\AdminLoginController@show');



