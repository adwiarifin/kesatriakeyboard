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

use Illuminate\Http\Request;

Route::get('/', 'FrontController@index');

/////////// AUTH /////////////////

Route::prefix('/auth')->group(function(){
	Route::get('/login', 'AuthController@getLogin')->name('login');
	Route::post('/login', 'AuthController@postLogin');
	Route::get('/logout', 'AuthController@getLogout');
});

/////////// AUTH END /////////////////

/////////// ADMIN /////////////////

Route::prefix('/admin')->group(function() {
	Route::middleware(['auth'])->group(function() {
		Route::get('/', 'AdminController@index');
		Route::get('/dashboard', 'AdminController@dashboard');

		Route::get('/sections', 'SectionController@index');
		Route::get('/sections/{section}/edit', 'SectionController@edit');
		Route::patch('/sections/{section}', 'SectionController@update');
	});
});

/////////// ADMIN END /////////////////