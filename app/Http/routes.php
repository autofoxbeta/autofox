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

Route::get('/', 'LandingPageController@index');

Route::post('/', 'LandingPageController@store');

Route::get('contact', 'FormController@index');

Route::post('contact', 'LandingPageController@store');

Route::get('for-mechanics', 'ForMechanicsController@index');

Route::post('for-mechanics', 'ForMechanicsController@store');



