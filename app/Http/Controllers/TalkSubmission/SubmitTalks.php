<?php namespace App\Http\Controllers\TalkSubmission;

use App\Http\Controllers\Controller;
use App\TalkSubmission\Speaker;
use App\TalkSubmission\Talk;
use Illuminate\Http\Request;

class SubmitTalks extends Controller {

    public function __construct() {
        $this->middleware('is-registered-speaker');
    }

    private function speaker() {
        return Speaker::forUser(\Auth::user());
    }

    public function viewSubmittedTalks() {
        return view('talk-submission.view-submitted-talks', [
            'talks' => Talk::AllBy($this->speaker())
        ]);
    }

    public function submitTalkForm() {
        return view('talk-submission.submit-talk-form');
    }

    public function submitTalk(Request $request) {
        // form validation

        $talk = Talk::submit(
            $this->speaker(),
            $request->get('title'),
            $request->get('description'),
            $request->get('notesForOrganizers')
        );

        return redirect('/submit-talks');
    }

    public function viewTalk($talkId) {
        return view('talk-submission.view-talk', [
            'talk' => Talk::BySpeaker($this->speaker(), $talkId)
        ]);
    }
}