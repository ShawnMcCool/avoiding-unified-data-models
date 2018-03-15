<?php namespace App\TalkApproval;

use App\Events\TalkWasSubmitted;
use Illuminate\Support\ServiceProvider;

class TalkApprovalServiceProvider extends ServiceProvider {

    public function boot() {
        \Event::listen(TalkWasSubmitted::class, RegisterSubmittedTalk::class);
    }
}