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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user.user');
});

Route::post('user/store', 'UserController@store');
Route::get('user/userdata', 'UserController@show');
Route::get('user/edit/{id}', 'UserController@edit');
Route::get('user/update/{id}', 'UserController@update');
Route::get('user/delete/{id}', 'UserController@delete');






