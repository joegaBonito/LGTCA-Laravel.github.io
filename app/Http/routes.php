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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'uses' => 'PageController@index',
        'as' => 'home'
    ]);
    Route::get('/Innovation', [
        'uses' => 'PageController@Innovation',
        'as' => 'Innovation'
    ]);
    Route::get('/Newsroom', [
        'uses' => 'PageController@Newsroom',
        'as' => 'Newsroom'
    ]);
    Route::get('/ContactUs', [
        'uses' => 'PageController@ContactUs',
        'as' => 'ContactUs'
    ]);
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
    'uses' => 'ViewController@view',
    ]);
});




