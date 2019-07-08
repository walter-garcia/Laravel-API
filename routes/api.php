<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function() {

	Route::get('/survivors', 'SurvivorsController@index')->name('survivors.all');
	Route::get('/survivors/{survivor}', 'SurvivorsController@show')->name('survivors.single');

	Route::post('/survivors', 'SurvivorsController@store')->name('survivors.create');
	Route::post('/survivors/items', 'ItemsController@store')->name('items.create');
	Route::post('/report/infection', 'InfectionsController@store')->name('report.create');
	
	Route::patch('/survivors/{id}/location', 'SurvivorsController@update')->name('survivors.update');

	Route::delete('/survivors/{id}', 'SurvivorsController@delete')->name('survivors.destroy');
});
