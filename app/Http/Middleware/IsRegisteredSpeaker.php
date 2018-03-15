<?php namespace App\Http\Middleware;

use App\TalkSubmission\Speaker;
use Closure;

class IsRegisteredSpeaker {
    public function handle($request, Closure $next) {
        if (\Auth::check() && Speaker::forUser(\Auth::user())) {
            return $next($request);
        }

        return redirect('/submit-talks/welcome');
    }
}
