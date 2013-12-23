<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('beer', 'Beer');

// Show pages.
Route::get('/', 'BeersController@index');
Route::get('/add', 'BeersController@add');
Route::get('/edit/{beer}', 'BeersController@edit');

// Handle form submissions.
Route::post('/add', 'BeersController@execAdd');
Route::post('/edit', 'BeersController@execEdit');
Route::post('/delete', 'BeersController@execDelete');
