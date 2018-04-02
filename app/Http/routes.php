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

Route::group(['prefix' => 'api' ], function ()
{
	Route::get('events', 'EventController@index');
	Route::get('events/{id}', 'EventController@show');
	Route::post('events', 'EventController@store');
	Route::put('events/{id}', 'EventController@update');
	Route::delete('events/{id}', 'EventController@delete');
});