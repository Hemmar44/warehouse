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

Route::get('/asortyment', function(){
	return view('/public/products');
});

Route::get('/polecane', function(){
	return view('/public/recommended');
});


Route::get('/nowosci', function(){
	return view('/public/new');
});

Route::get('/promocje', function(){
	return view('/public/promo');
});




Route::get('/admin', ['middleware' => 'admin', function() {
	return view('admin');
}]);

Route::get('/wares', 'WaresController@index');
Route::get('new', 'WaresController@create');
