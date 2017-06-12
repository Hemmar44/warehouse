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



Auth::routes();

Route::get('/', function() {

	

	return view('/public/main');
});

Route::get('/asortyment','WareController@all');

Route::get('/polecane', 'WareController@products');

Route::get('/nowosci', 'WareController@products');

Route::get('/promocje', 'WareController@products');


Route::get('/admin', ['middleware' => 'admin', function() {
	return view('/admin/admin');
}]);


