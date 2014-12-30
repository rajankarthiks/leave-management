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

Route::post('leave/apply', [
    'before' => 'auth',
    'as' => 'apply_leave',
    'uses' => 'LeavesController@apply'
]);

Route::get('leave/{id}/approve', [
    'before' => 'role:administrator',
    'as' => 'approve_leave',
    'uses' => 'LeavesController@approve_leave'
]);

Route::get('leave/{id}/reject', [
    'before' => 'role:administrator',
    'as' => 'reject_leave',
    'uses' => 'LeavesController@reject_leave'
]);


Route::any('admin', [
    'before' => 'role:administrator',
    'as' => 'admin.index',
    'uses' => 'AdminController@index'
]);