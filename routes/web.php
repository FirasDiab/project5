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

Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/delete/{id}', 'CategoryController@destroy');
Route::get('/edit/{id}', 'CategoryController@edit');
Route::post('update/{id}', 'CategoryController@update');
