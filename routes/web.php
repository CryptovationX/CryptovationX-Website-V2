<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



Route::get('/', 'PageController@getIndex');


Route::get('/terms-conditions', 'PageController@getTermsandconditions');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ShowController@profile')->name('profile');
Route::get('/balance', 'ShowController@balance')->name('balance');
Route::post('/signoutt', 'ShowController@signout')->name('signout');
Route::get('/signoutt', 'ShowController@signout2')->name('signout.get');

Route::get('/firstsignon/{token}', 'SignupController@signup');
Route::get('/ava', 'PageController@getAva');
// Route::get('test', 'TestController@test');
// Route::get('addtoken', 'CXAHistoryController@addToken');
