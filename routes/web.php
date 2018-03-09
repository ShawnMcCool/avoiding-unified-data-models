<?php namespace App\Http\Controllers;
use Route, Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/submit-talks')->group(function () {
    Route::get('/', TalkSubmission\SubmitTalks::class . '@viewSubmittedTalks');

    Route::get('welcome', TalkSubmission\Welcome::class . '@welcome');
    Route::post('login', TalkSubmission\Welcome::class . '@submitLogin');
    Route::post('register', TalkSubmission\Welcome::class . '@submitRegistration');
});