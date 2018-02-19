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

/////////// ADMIN /////////////////

Route::prefix('/admin')->group(function() {
	Route::middleware(['auth'])->group(function() {
		Route::get('/', 'AdminController@index');
		Route::get('/profile', 'AdminController@profile');
        Route::patch('/profile', 'AdminController@patchProfile');
		Route::get('/dashboard', 'AdminController@dashboard');

		Route::get('/sections', 'SectionController@index');
		Route::get('/sections/{section}/edit', 'SectionController@edit');
		Route::patch('/sections/{section}', 'SectionController@update');

		Route::get('/messages', 'MessageController@index');
		Route::get('/messages/{message}', 'MessageController@show');
		Route::post('/messages/{message}', 'MessageController@send');

		Route::get('/works', 'WorkController@index');
		Route::get('/works/create', 'WorkController@create');
		Route::post('/works/create', 'WorkController@store');
		Route::get('/works/{work}', 'WorkController@edit');
		Route::patch('/works/{work}', 'WorkController@update');
		Route::delete('/works/{work}', 'WorkController@destroy');

		Route::get('/posts', 'PostController@index');
		Route::get('/posts/create', 'PostController@create');
		Route::post('/posts/create', 'PostController@store');
		Route::get('/posts/{post}', 'PostController@edit');
		Route::patch('/posts/{post}', 'PostController@update');
		Route::delete('/posts/{post}', 'PostController@destroy');
	});
});

/////////// ADMIN END /////////////////
