<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home','RestoController@index')->middleware('auth');
Route::get('/','RestoController@index')->middleware('auth');
Route::get('list','RestoController@list')->middleware('auth');
Route::get('add','RestoController@add')->middleware('auth');
Route::get('delete/{id}','RestoController@delete')->middleware('auth');
Route::get('edit/{id}','RestoController@edit')->middleware('auth');
Route::get('register','RestoController@register');
Route::get('login','RestoController@login');

Route::post('store','RestoController@store');
Route::post('edit','RestoController@update');
Route::post('logout','RestoController@logout');

Auth::routes();