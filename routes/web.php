<?php

Route::get('/', 'UsersController@index');

// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'update', 'edit']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('directmessages', 'DirectmessagesController@directmessages')->name('users.directmessages');
        Route::get('directmessages/users', 'DirectmessagesController@users')->name('directmessages.users');
        Route::post('users/upload', 'UsersController@upload');
    });
    Route::resource('posts', 'PostsController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('directmessages', 'DirectmessagesController', ['only' => ['index', 'store', 'destroy']]);
});


    