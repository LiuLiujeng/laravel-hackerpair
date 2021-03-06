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
Route::get('events/{id}/', 'EventsController@show')->name('events.show');

// New route method in Laravel 5.5
// Route::view('/', 'welcome.index');
Route::get('/', 'WelcomeController@index')->name('welcome.index');

