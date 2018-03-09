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

Route::get('/', 'WebController@index');
Route::get('/blog', 'WebController@blogList');
Route::get('/blog/{slug}', 'WebController@blog');
Route::get('/portfolio', 'WebController@portfolioList');
Route::get('/portfolio/{slug}', 'WebController@portfolio');
Route::post('/message', 'WebController@postMessage');

/////////// AUTH /////////////////

Route::prefix('/auth')->group(function(){
	Route::get('/login', 'AuthController@getLogin')->name('login');
	Route::post('/login', 'AuthController@postLogin');
	Route::get('/logout', 'AuthController@getLogout');
});