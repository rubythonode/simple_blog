<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


get('auth/signin', ['as' => 'auth.signin', 'uses' => 'Auth\AuthController@getSignIn']);
post('auth/signin', ['as' => 'auth.signin', 'uses' => 'Auth\AuthController@doSignIn']);
get('auth/signout', ['as' => 'auth.signout', 'uses' => 'Auth\AuthController@doSignOut']);
