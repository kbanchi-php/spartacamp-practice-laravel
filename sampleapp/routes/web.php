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

Route::get('/', 'TopController@top');

Route::get('/list', 'ListController@list');

Route::post('/delete/{id}', 'ListController@delete');

Route::get('/new', 'NewController@new');

Route::post('/create', 'NewController@create');

Route::get('/edit/{id}', 'EditController@edit');

Route::post('/update/{id}', 'EditController@update');
