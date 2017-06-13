<?php


Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/create', 'BlogController@create');

Route::post('/Blog', 'BlogController@store');
