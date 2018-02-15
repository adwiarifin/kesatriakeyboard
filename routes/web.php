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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/front', function () {
    return view('front.master');
});

Route::get('/admin', function () {
    return view('admin.default');
});

/////////// AUTH /////////////////

Route::prefix('/auth')->group(function(){
	Route::get('/login', function () {
		if (Auth::check()) {
	        return redirect('/admin/dashboard');
	    }
	    return view('auth.login');
	})->name('login');

	Route::post('/login', function(Request $request) {
		$email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/admin/dashboard');
        }
        
        return "Login Error";
	});

	Route::get('/logout', function() {
		Auth::logout();
        return redirect('/auth/login');
	});
});

/////////// AUTH /////////////////

Route::prefix('/admin')->group(function() {
	Route::middleware(['auth'])->group(function() {
		Route::get('/dashboard', 'AdminController@dashboard');

		Route::get('/sections', 'SectionController@index');
		Route::get('/sections/{section}/edit', 'SectionController@edit');
		Route::patch('/sections/{section}', 'SectionController@update');
	});
});