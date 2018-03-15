<?php namespace App\Http\Middleware;

use App\TalkApproval\Organizer;
use Auth, Closure;

class IsRegisteredOrganizer {

    public function handle($request, Closure $next) {
        if (Auth::check() && Organizer::forUser(Auth::user())) {
            return $next($request);
        }

        return response("You must be an organizer to access this area.");
    }
}
