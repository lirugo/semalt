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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/extensive', 'HomeController@extensive');
Route::get('/database', 'HomeController@database');

// getUserWithHigherBids
Route::get('/getUserWithHigherBids', 'Events\EventsController@getUserWithHigherBids');
Route::get('/getEventWithoutBids', 'Events\EventsController@getEventWithoutBids');
Route::get('/getEventWithMoreThreeBids', 'Events\EventsController@getEventWithMoreThreeBids');
Route::get('/getEventWithMaxBid', 'Events\EventsController@getEventWithMaxBid');
