<?php namespace App\Events;

class TalkWasApproved {

    private $talkId;
    private $title;
    private $description;
    private $notes;
    private $speakerId;
    private $speakerName;
    private $speakerEmail;
    private $speakerBio;
    private $speakerImage;

    public function __construct($talkId, $title, $description, $notes, $speakerId, $speakerName, $speakerEmail, $speakerBio, $speakerImage) {
        $this->talkId = $talkId;
        $this->title = $title;
        $this->description = $description;
        $this->notes = $notes;
        $this->speakerId = $speakerId;
        $this->speakerName = $speakerName;
        $this->speakerEmail = $speakerEmail;
        $this->speakerBio = $speakerBio;
        $this->speakerImage = $speakerImage;
    }

    public function talkId() {
        return $this->talkId;
    }

    public function title() {
        return $this->title;
    }

    public function description() {
        return $this->description;
    }

    public function notes() {
        return $this->notes;
    }

    public function speakerId() {
        return $this->speakerId;
    }

    public function speakerName() {
        return $this->speakerName;
    }

    public function speakerEmail() {
        return $this->speakerEmail;
    }

    public function speakerBio() {
        return $this->speakerBio;
    }

    public function speakerImage() {
        return $this->speakerImage;
    }
}