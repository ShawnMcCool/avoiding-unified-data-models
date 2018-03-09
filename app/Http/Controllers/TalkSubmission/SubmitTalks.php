<?php namespace App\Http\Controllers\TalkSubmission;

use App\Http\Controllers\Controller;

class SubmitTalks extends Controller {

    public function __construct() {
        $this->middleware('is-registered-speaker');
    }

    public function viewSubmittedTalks() {
        return view('talk-submission.view-submitted-talks');
    }
}