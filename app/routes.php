<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'UserController@home'
]);

Route::post('register', [
    'before' => 'guest',
    'as' => 'register_path',
    'uses' => 'UserController@post_register'
]);

Route::post('login', [
    'before' => 'guest',
    'as' => 'login_path',
    'uses' => 'UserController@post_login'
]);

Route::get('logout', [
    'before' => 'auth',
    'as' => 'logout_path',
    'uses' => 'UserController@logout'
]);

Route::any('dashboard', [
    'before' => 'auth',
    'as' => 'dashboard',
    'uses' => 'UserController@dashboard'
]);

Route::any('admin', [
    'before' => 'role:administrator',
    'as' => 'admin.index',
    'uses' => 'AdminController@index'
]);