<?php namespace App\Http\Controllers;
use App\Events\SpeakerDetailsWereUpdated;
use Route, Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/submit-talks')->group(function () {
    // welcome / authentication
    Route::get('welcome', TalkSubmission\Welcome::class . '@welcome');
    Route::post('login', TalkSubmission\Welcome::class . '@submitLogin');
    Route::post('register', TalkSubmission\Welcome::class . '@submitRegistration');

    // submit some talks
    Route::get('/', TalkSubmission\SubmitTalks::class . '@viewSubmittedTalks');
    Route::get('submit-new', TalkSubmission\SubmitTalks::class . '@submitTalkForm');
    Route::post('submit-new', TalkSubmission\SubmitTalks::class . '@submitTalk');
    Route::get('view-talk/{talkId}', TalkSubmission\SubmitTalks::class . '@viewTalk');
});

Route::prefix('/approve-talks')->middleware('is-registered-organizer')->group(function () {
    // authentication
    Route::get('login', TalkApproval\ApproveTalks::class . '@loginForm');
    Route::post('login', TalkApproval\ApproveTalks::class . '@submitLogin');

    // submit some talks
    Route::get('/', TalkApproval\ApproveTalks::class . '@viewSubmittedTalks');
    Route::get('view-talk/{talkId}', TalkApproval\ApproveTalks::class . '@viewTalk');
    Route::get('approve-talk/{talkId}', TalkApproval\ApproveTalks::class . '@approveTalk');
});