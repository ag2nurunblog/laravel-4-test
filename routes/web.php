<?php


Route::singularResourceParameters();
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
    return view('welcome');
});

Route::group(['middleware'=>['web']], function ()
{
  Route::resource('users','UsersController');
  Route::resource('users-group','UserGroupsController');
  Route::resource('companies','CompaniesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
