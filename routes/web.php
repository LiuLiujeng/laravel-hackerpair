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

// New route method in Laravel 5.5
// Route::view('/', 'welcome.index');
Route::get('/', function () {
    $languages = [
        'Perl',
        'PHP',
        'Python',
    ];
    Log::debug($languages);
    Debugbar::error('This is a testing: Something is definitely going wrong.');

    return view('welcome.index');
});
