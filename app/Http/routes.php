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

Route::get('/', 'HomeController@index');
Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@access');
Route::get('register', 'AuthController@register');
Route::post('register', 'AuthController@create');

Route::get('login/facebook', 'AuthController@facebook');
Route::get('login/twitter', 'AuthController@twitter');
Route::get('login/google', 'AuthController@google');

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@profile');
    Route::post('profile', 'ProfileController@edit');
    Route::get('my-recepies', 'RecepiesController@myRecepies');
    Route::get('recepie/{id}/edit', 'RecepiesController@edit');
    Route::get('recepie/{id}/delete', 'RecepiesController@delete');
    Route::get('add-recepie', 'RecepiesController@create');
    Route::post('add-recepie', 'RecepiesController@store');
    Route::get('upgrade', 'PaymentController@upgrade');


    Route::group(['middleware' => 'admin'], function () {
        Route::get('all-users', 'AdminController@users');


    });
});


