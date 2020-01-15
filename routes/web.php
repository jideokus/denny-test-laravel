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
Route::get('/events','EventController@showEvents')->name('events');
Route::get('/events/create','EventController@createEvent')->name('create-event');
Route::post('/events/submit','EventController@submitEvent')->name('submit-event');
//Display all events
//Display single events
//Add event
//Remvoe event
//Join event
//Update
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
