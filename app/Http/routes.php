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

//static routes should be placed here

Route::get('/local', function () {
    return view("localization.index");
});

//for home route
Route::get('/', array('as' => 'page.show', 'uses' => 'PageController@show'));

//for all other dynamic routes
Route::get('/{slug}', array('as' => 'page.show', 'uses' => 'PageController@show'));

