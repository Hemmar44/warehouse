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
    return view('welcome');
});

Auth::routes();



Route::get('/admin', ['middleware' => 'admin', function() {
	return view('admin');
}]);

Route::get('/wares', 'WaresController@index');
Route::get('new', 'WaresController@create');
