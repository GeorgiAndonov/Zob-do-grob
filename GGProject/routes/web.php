<?php


Route::get('/', 'LoginRegisterController@create')->name('login');

Route::post('/register', 'RegistrationController@store');

Route::get('/home', 'HomeController@index');

// Route::get('/posts/create', 'PostsController@create');

// Route::post('/posts', 'PostsController@store');

// Route::get('/posts/{post}', 'PostsController@show');

// Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route::get('/posts/tags/{tag}', 'TagsController@index');

// Route::get('/register', 'RegistrationController@create');

// Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@logout');

Route::prefix('admin')->group(function() 
{

    Route::get('/login', 'AdminController@showLoginForm')->name('admin.login');

    Route::post('/login', 'AdminController@login');

    Route::get('/', 'AdminLoggedController@index');

    Route::get('/logout', 'AdminLoggedController@logout');

});

Route::get('/posts', function(){
    return view('layouts.posts');
});
