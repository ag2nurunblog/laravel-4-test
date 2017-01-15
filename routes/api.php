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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// a api está sem atutenticação

Route::resource('companies', 'Api\CompanyController', [
    'except' => ['create', 'edit']
]);

Route::resource('groups', 'Api\GroupController', [
    'except' => ['create', 'edit']
]);

Route::resource('users', 'Api\UserController', [
    'except' => ['create', 'edit']
]);
