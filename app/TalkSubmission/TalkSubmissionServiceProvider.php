<?php namespace App\TalkSubmission;

use App\Events\SpeakerDetailsWereUpdated;
use App\TalkSubmission\Listeners\UpdateSpeakerDetails;
use Illuminate\Support\ServiceProvider;

class TalkSubmissionServiceProvider extends ServiceProvider {

    public function boot() {
        \Event::listen(SpeakerDetailsWereUpdated::class, UpdateSpeakerDetails::class);
    }
}