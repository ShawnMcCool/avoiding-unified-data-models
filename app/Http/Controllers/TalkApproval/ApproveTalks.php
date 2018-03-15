<?php namespace App\Http\Controllers\TalkApproval;

use App\Http\Controllers\Controller;
use App\TalkApproval\Organizer;
use App\TalkApproval\SubmittedTalk;
use Illuminate\Http\Request;

class ApproveTalks extends Controller {

    private function organizer() {
        return Organizer::forUser(\Auth::user());
    }

    public function loginForm() {
        return view('talk-approval.login-form');
    }

    public function submitLogin(Request $request) {
        // form validation goes here
        if (\Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ])) {
            return redirect()->intended('/approve-talks');
        }
        return redirect('/approve-talks/login');
    }

    public function viewSubmittedTalks() {
        return view('talk-approval.view-submitted-talks', [
            'unapprovedTalks' => SubmittedTalk::unapproved(),
            'approvedTalks'   => SubmittedTalk::approved(),
        ]);
    }

    public function viewTalk($talkId) {
        return view('talk-approval.view-talk', [
            'talk' => SubmittedTalk::find($talkId),
        ]);
    }

    public function approveTalk($talkId) {
        SubmittedTalk::approveBy($talkId, $this->organizer());

        return redirect('/approve-talks');
    }
}