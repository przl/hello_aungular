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

Route::get('/get-message', function () {
    return response()->json(['string' => 'Hello World']);
});

Route::get('hello', function () {
    return view('hello_angular');
});
