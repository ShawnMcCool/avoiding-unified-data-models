<?php namespace App\Scheduling;

use App\Events\TalkWasApproved;
use Illuminate\Support\ServiceProvider;
use Event;

class SchedulingServiceProvider extends ServiceProvider {

    public function boot() {
        Event::listen(TalkWasApproved::class, AutoScheduleApprovedTalk::class);
    }
}