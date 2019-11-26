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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/functions', 'FunctionsController@index')->name('functions');
Route::get('/functions/create', 'FunctionsController@create')->name('functions.create');
Route::post('/functions/store', 'FunctionsController@store')->name('functions.store');