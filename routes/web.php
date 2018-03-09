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
Route::get('/blog', 'FrontController@blogList');
Route::get('/blog/{slug}', 'FrontController@blog');
Route::get('/portfolio', 'FrontController@portfolioList');
Route::get('/portfolio/{slug}', 'FrontController@portfolio');
Route::post('/message', 'FrontController@postMessage');

/////////// AUTH /////////////////

Route::prefix('/auth')->group(function(){
	Route::get('/login', 'AuthController@getLogin')->name('login');
	Route::post('/login', 'AuthController@postLogin');
	Route::get('/logout', 'AuthController@getLogout');
});