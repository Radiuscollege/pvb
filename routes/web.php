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

Route::get('/import', 'ImportController@show')->name('import.show');
Route::post('/import', 'ImportController@import')->name('import.import');

Route::get('/', 'InterviewController@index')->name('home');
