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



Route::auth();

// Access by both type user
Route::get('/home', 'HomeController@index');

// Admin routes
Route::get('/home/question','AdminController@qlist');
Route::get('/home/users','AdminController@ulist');
Route::get('/home/guide','AdminController@guide');

// Participant routes
Route::get('/home/noticeboard','PartController@noticeboard');
Route::get('/home/challenge','PartController@chal');
Route::get('/home/danger','PartController@danger');



