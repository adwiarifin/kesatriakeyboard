<?php

Route::get('/', 'AdminController@index');
Route::get('/profile', 'AdminController@profile');
Route::patch('/profile', 'AdminController@patchProfile');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/default', 'AdminController@default');

Route::get('/sections', 'SectionController@index');
Route::get('/sections/{section}/edit', 'SectionController@edit');
Route::patch('/sections/{section}', 'SectionController@update');

Route::get('/messages', 'MessageController@index');
Route::get('/messages/{message}', 'MessageController@show');
Route::post('/messages/{message}', 'MessageController@send');
Route::delete('/messages/{message}', 'MessageController@destroy');

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

Route::get('/terminal', 'TerminalController@index');
Route::get('/terminal/deploy', 'TerminalController@deploy');
Route::get('/terminal/save', 'TerminalController@save');
Route::get('/terminal/update', 'TerminalController@update');