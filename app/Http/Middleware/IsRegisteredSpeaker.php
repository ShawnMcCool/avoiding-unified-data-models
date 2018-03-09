<?php namespace App\Http\Middleware;

use App\TalkSubmission\Speaker;
use Closure;

class IsRegisteredSpeaker {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (\Auth::check() && Speaker::forUser(\Auth::user())) {
            return $next($request);
        }

        return redirect('/submit-talks/welcome');
    }
}
