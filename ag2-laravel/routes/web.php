<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['web']], function () {

	Route::get('/', ['as' => 'user.index', 'uses' => 'UserController@index']);

	Route::group(['prefix' => 'user'], function () {

		Route::get('/', ['as' => 'user.index', 'uses' => 'UserController@index']);

	    Route::get('/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
	    Route::put('/edit/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

	    Route::get('/register', ['as' => 'user.register', 'uses' => 'UserController@register']);
	    Route::post('/register', ['as' => 'user.store', 'uses' => 'UserController@store']);

	    Route::get('/destroy/{id}', ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
	});

	Route::group(['prefix' => 'company'], function () {

		Route::get('/', ['as' => 'company.index', 'uses' => 'CompanyController@index']);

	    Route::get('/edit/{id}', ['as' => 'company.edit', 'uses' => 'CompanyController@edit']);
	    Route::put('/edit/{id}', ['as' => 'company.update', 'uses' => 'CompanyController@update']);

	    Route::get('/register', ['as' => 'company.register', 'uses' => 'CompanyController@register']);
	    Route::post('/register', ['as' => 'company.store', 'uses' => 'CompanyController@store']);

	    Route::get('/destroy/{id}', ['as' => 'company.destroy', 'uses' => 'CompanyController@destroy']);
	});

	Route::group(['prefix' => 'group'], function () {

		Route::get('/', ['as' => 'group.index', 'uses' => 'GroupController@index']);

	    Route::get('/edit/{id}', ['as' => 'group.edit', 'uses' => 'GroupController@edit']);
	    Route::put('/edit/{id}', ['as' => 'group.update', 'uses' => 'GroupController@update']);

	    Route::get('/register', ['as' => 'group.register', 'uses' => 'GroupController@register']);
	    Route::post('/register', ['as' => 'group.store', 'uses' => 'GroupController@store']);

	    Route::get('/destroy/{id}', ['as' => 'group.destroy', 'uses' => 'GroupController@destroy']);
	});

});