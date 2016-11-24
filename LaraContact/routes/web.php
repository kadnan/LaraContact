<?php
Route::get('/', 'HomeController@index');
Route::get('/new', 'HomeController@create');
Route::post('/new', 'HomeController@add');
