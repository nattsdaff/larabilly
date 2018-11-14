<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'StaticController@index');
Route::get('faq', 'StaticController@faq');
Route::get('exito', 'StaticController@exito');

Route::get('login', 'LoginController@show');
Route::get('register', 'RegisterController@show');
Route::post('register', 'RegisterController@store');
