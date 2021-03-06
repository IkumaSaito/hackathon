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
    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'update', 'edit',]]);
    Route::get('users/{id}/avataredit', 'UsersController@avataredit')->name('users.avataredit');
    Route::post('users/upload', 'UsersController@upload');
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('directmessages', 'DirectmessagesController@directmessages')->name('users.directmessages');
        Route::get('directmessages/users', 'DirectmessagesController@users')->name('directmessages.users');
        Route::get('calendar/edit', 'PlansController@edit')->name('calendar.edit');
        Route::get('calendar/calendar', 'PlansController@index')->name('calendar.calendar'); //不明
        
    });
    Route::resource('posts', 'PostsController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('directmessages', 'DirectmessagesController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('plans', 'PlansController', ['only' => ['index', 'store', 'edit', 'update', 'destroy']]);

    
});

Route::get('concept', 'UsersController@concept')->name('users.concept');    

Route::get('intro', 'UsersController@intro')->name('users.intro');
Route::get('introja', 'UsersController@introja')->name('users.introja');

Route::get('explain', 'UsersController@explain')->name('users.explain');    
Route::get('explain2', 'UsersController@explain2')->name('users.explain2');  

Route::get('welcome', 'UsersController@welcome')->name('views.welcome');    
