<?php


Route::get('/', 'RegistrationController@create');

Route::post('/', 'RegistrationController@store');

Route::get('/home', 'HomeController@index');

Route::get('/navbar', function(){
    return view('layouts.navbar');
});

// Route::get('/posts/create', 'PostsController@create');

// Route::post('/posts', 'PostsController@store');

// Route::get('/posts/{post}', 'PostsController@show');

// Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route::get('/posts/tags/{tag}', 'TagsController@index');

// Route::get('/register', 'RegistrationController@create');

// Route::post('/register', 'RegistrationController@store');

// Route::get('/login', 'SessionsController@create')->name('login');

// Route::post('/login', 'SessionsController@store');

// Route::get('/logout', 'SessionsController@logout');
