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

Route::get('/front', function () {
    return view('front.master');
});

Route::get('/admin', function () {
    return view('admin.default');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::prefix('/admin')->group(function() {
	Route::middleware(['auth'])->group(function() {
		Route::get('/sections', function(){
			echo 'Hello World';
		});
	});
});