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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/dynamic', 'DynamicController@index')->name('dynamic');
Route::get('/error-page/{list?}', 'ErrorPageController@index')->name('error-page');
Route::get('/form', 'IndexController@form')->name('form');
Route::get('/final', 'IndexController@final')->name('final');
