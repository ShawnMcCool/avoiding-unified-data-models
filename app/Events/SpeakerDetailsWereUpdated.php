<?php namespace App\Events;

class SpeakerDetailsWereUpdated {

    private $speakerId;
    private $speakerName;
    private $speakerEmail;
    private $speakerBio;

    public function __construct($speakerId, $speakerName, $speakerEmail, $speakerBio) {
        $this->speakerId = $speakerId;
        $this->speakerName = $speakerName;
        $this->speakerEmail = $speakerEmail;
        $this->speakerBio = $speakerBio;
    }
}
