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

Route::get('/', function () {

    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| This is where all of the secured routes shall be placed.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/home', 'HomeController@index');

    // Admin
    Route::get('admin', [
        'uses'       => 'AdminController@admin',
        'as'         => 'admin',
        'middleware' => 'admin'
    ]);

    /*Route::get('admin', function () {
        return view('admin');
    });*/
});