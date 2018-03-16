<?php namespace App\TalkApproval;

use App\Events\OrganizerWasRegistered;
use App\Events\TalkWasSubmitted;
use Illuminate\Support\ServiceProvider;
use Event;

class TalkApprovalServiceProvider extends ServiceProvider {

    public function boot() {
        Event::listen(TalkWasSubmitted::class, RegisterSubmittedTalk::class);
        Event::listen(OrganizerWasRegistered::class, RegisterOrganizer::class);
    }
}