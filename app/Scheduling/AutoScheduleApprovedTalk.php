<?php namespace App\Scheduling;

use App\Events\TalkWasApproved;

class AutoScheduleApprovedTalk {

    public function handle(TalkWasApproved $talk) {
        ScheduledTalk::schedule(
            $talk->talkId(),
            $talk->title(),
            $talk->description(),
            $talk->notes(),
            $talk->speakerId(),
            $talk->speakerName(),
            $talk->speakerEmail(),
            $talk->speakerBio(),
            $talk->speakerImage()
        );
    }
}