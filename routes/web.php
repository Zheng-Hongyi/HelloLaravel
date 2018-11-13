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

Route::get('task', 'ReviewController@index');

Route::get('task/{id}', 'ReviewController@show');

Route::get('create', 'ReviewController@create');

Route::post('create/task', 'ReviewController@store');

Route::get('editreview', 'ReviewController@editreview');

Route::get('edit/{id}', 'ReviewController@edit');

Route::patch('update/{id}', 'ReviewController@update');