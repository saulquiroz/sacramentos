<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login','LoginController');
Route::resource('usuario', 'UsuarioController');

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivacion');

Route::get('admin', 'LoginController@admin');
Route::get('fiel', 'LoginController@fiel');
Route::get('sacerdote', 'LoginController@sacerdote');
