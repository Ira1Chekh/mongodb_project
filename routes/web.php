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

Route::get('add','CarsController@create');
Route::post('add','CarsController@store');
Route::get('car','CarsController@index');
Route::get('edit/{id}','CarsController@edit');
Route::post('edit/{id}','CarsController@update');
Route::delete('{id}','CarsController@destroy');

