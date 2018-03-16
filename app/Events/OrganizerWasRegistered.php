<?php namespace App\Events;

class OrganizerWasRegistered {

    private $userId;
    private $name;

    public function __construct($userId, $name) {
        $this->userId = $userId;
        $this->name = $name;
    }

    public function userId() {
        return $this->userId;
    }

    public function name() {
        return $this->name;
    }
}