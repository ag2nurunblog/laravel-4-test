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
    return redirect('/admin');
});

Auth::routes();

Route::get('/admin', 'Admin\\AdminController@index');

//companies
Route::post('admin/company/delete', 'Admin\\CompanyController@destroy');
Route::get('admin/company/getdata_json', 'Admin\\TableServiceController@companyJsonService');
Route::get('admin/company/new', 'Admin\\CompanyController@create');
Route::get('admin/company/{id}/edit', 'Admin\\CompanyController@edit');
Route::get('admin/company/detail/{id}', 'Admin\\CompanyController@show');
Route::get('admin/companies', 'Admin\\CompanyController@index');
Route::resource('admin/company', 'Admin\\CompanyController');

//groups
Route::post('admin/group/delete', 'Admin\\GroupController@destroy');
Route::get('admin/group/getdata_json', 'Admin\\TableServiceController@groupJsonService');
Route::get('admin/group/new', 'Admin\\GroupController@create');
Route::get('admin/group/{id}/edit', 'Admin\\GroupController@edit');
Route::get('admin/group/detail/{id}', 'Admin\\GroupController@show');
Route::get('admin/groups', 'Admin\\GroupController@index');
Route::resource('admin/group', 'Admin\\GroupController');

//users
Route::post('admin/user/delete', 'Auth\\RegisterController@destroy');
Route::get('admin/user/getdata_json', 'Admin\\TableServiceController@usersJsonService');
Route::get('admin/user/new', 'Auth\RegisterController@showRegistrationForm');
Route::get('admin/users','Auth\\RegisterController@index');
Route::get('admin/user/{id}/edit', 'Auth\\RegisterController@edit');
Route::get('admin/user/detail/{id}', 'Auth\\RegisterController@show');
Route::get('admin/user/perfil/{id}','Auth\\RegisterController@perfil');
Route::post('admin/register/{id}', 'Auth\\RegisterController@update');

Route::resource('admin/logout', 'Auth\LoginController@logout');

