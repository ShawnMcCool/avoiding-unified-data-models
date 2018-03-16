<?php namespace App\Http\Controllers;
use App\Scheduling\ScheduledTalk;
use Route, Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schedule', function() {
    return view('scheduling.view-schedule', [
        'talks' => ScheduledTalk::all()
    ]);
});

Route::get('/view-talk/{talkId}', function($talkId) {
    return view('scheduling.view-talk', [
        'talk' => ScheduledTalk::find($talkId)
    ]);
});

Auth::routes();

// hack - so that we don't have to build user management
Route::middleware('auth')->get('/register-organizer/{name}', function($name) {
    event(new \App\Events\OrganizerWasRegistered(\Auth::user()->id, $name));
    return "$name is registered as an organizer";
});

Route::prefix('/submit-talks')->group(function () {
    // welcome / authentication
    Route::get('welcome', TalkSubmission\Welcome::class . '@welcome');
    Route::post('login', TalkSubmission\Welcome::class . '@submitLogin');
    Route::post('register', TalkSubmission\Welcome::class . '@submitRegistration');

    // submit some talks
    Route::middleware('is-registered-speaker')->group(function() {
        Route::get('/', TalkSubmission\SubmitTalks::class . '@viewSubmittedTalks');
        Route::get('submit-new', TalkSubmission\SubmitTalks::class . '@submitTalkForm');
        Route::post('submit-new', TalkSubmission\SubmitTalks::class . '@submitTalk');
        Route::get('view-talk/{talkId}', TalkSubmission\SubmitTalks::class . '@viewTalk');
    });
});

Route::prefix('/approve-talks')->group(function () {
    // authentication
    Route::get('login', TalkApproval\ApproveTalks::class . '@loginForm');
    Route::post('login', TalkApproval\ApproveTalks::class . '@submitLogin');

    // submit some talks
    Route::middleware('is-registered-organizer')->group(function() {
        Route::get('/', TalkApproval\ApproveTalks::class . '@viewSubmittedTalks');
        Route::get('view-talk/{talkId}', TalkApproval\ApproveTalks::class . '@viewTalk');
        Route::get('approve-talk/{talkId}', TalkApproval\ApproveTalks::class . '@approveTalk');
    });
});