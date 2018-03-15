<?php namespace App\TalkSubmission\Listeners;

use App\Events\SpeakerDetailsWereUpdated;

class UpdateSpeakerDetails {
    public function handle(SpeakerDetailsWereUpdated $event) {
        die("speaker details were updated");
    }
}
