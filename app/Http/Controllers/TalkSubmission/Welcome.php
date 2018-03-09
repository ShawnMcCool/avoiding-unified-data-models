<?php namespace App\Http\Controllers\TalkSubmission;

use App\Http\Controllers\Controller;
use App\TalkSubmission\Speaker;
use App\UserAuthentication;
use Illuminate\Http\Request;

class Welcome extends Controller {

    public function welcome() {
        return view('talk-submission.welcome');
    }

    public function submitLogin(Request $request) {
        // form validation goes here
        if (\Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ])) {
            return redirect()->intended('/submit-talks');
        }
        return redirect('/submit-talks/welcome');
    }

    public function submitRegistration(Request $request) {
        // form validation

        $user = UserAuthentication::register(
            $request->get('email'),
            $request->get('password')
        );

        Speaker::register(
            $user,
            $request->get('name'),
            $request->get('email'),
            $request->get('bioText'),
            $request->get('imageUrl')
        );

        return redirect('submit-talks');
    }
}