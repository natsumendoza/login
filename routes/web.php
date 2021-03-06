<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    if (Auth::check()) {
        return "the user is logged in.";
    }

//    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
