<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));

Route::get('login', array('as' => 'auth.login', 'uses' => 'AuthenticationController@login'));
Route::get('register', array('as' => 'auth.register', 'uses' => 'AuthenticationController@register'));

Route::resource('users', 'UsersController');