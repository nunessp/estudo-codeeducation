<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/client', 'ClientController@index');
Route::post('/client', 'ClientController@store');
Route::get('/client/{id}', 'ClientController@show');
Route::put('/client/{id}', 'ClientController@update');
Route::delete('/client/{id}', 'ClientController@destroy');


