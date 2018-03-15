<?php namespace App\TalkApproval;

use App\Events\TalkWasSubmitted;

class RegisterSubmittedTalk {
    // mappings are protection
    public function handle(TalkWasSubmitted $event) {
        SubmittedTalk::register(
            $event->talkId(),
            $event->title(),
            $event->description(),
            $event->notes(),
            $event->speakerId(),
            $event->speakerName(),
            $event->speakerEmail(),
            $event->speakerBio(),
            $event->speakerImage()
        );
    }
}