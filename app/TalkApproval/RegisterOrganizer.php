<?php namespace App\TalkApproval;

use App\Events\OrganizerWasRegistered;

class RegisterOrganizer {
    public function handle(OrganizerWasRegistered $organizer) {
        Organizer::register($organizer->userId(), $organizer->name());
    }
}