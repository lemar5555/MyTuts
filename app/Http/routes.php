<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'PostsController@profile');

Route::get('/login', 'UsersController@loginPage');
Route::get('/logout', 'UsersController@logout');

Route::get('/registration', 'UsersController@registrationPage');

Route::post('/auth', 'UsersController@authUser');

Route::post('/register-user', 'UsersController@storeUser');


Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::put('/posts/update/{id}', 'PostsController@update');

Route::post('/posts/delete/{id}', 'PostsController@delete');

Route::get('/posts/show/{id}', 'PostsController@show');

Route::get('/posts/edit/{id}', 'PostsController@edit');

Route::post('/posts/store', 'PostsController@store');