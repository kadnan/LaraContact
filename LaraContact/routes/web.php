<?php
Route::get('/', 'HomeController@index');
Route::get('/new', 'HomeController@create');
Route::post('/new', 'HomeController@add');
Route::get('/view/{id}', 'HomeController@view');
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/edit/{id}', 'HomeController@update');
Route::get('/delete/{id}', 'HomeController@delete');
