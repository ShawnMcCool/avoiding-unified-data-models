<?php namespace App\TalkSubmission;

use App\UserAuthentication;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model {

    protected $table = 'talk_submission_speakers';
    protected $fillable = ['userId', 'name', 'contactEmail', 'bioText', 'imageUrl'];

    public static function register(UserAuthentication $user, $name, $contactEmail, $bioText, $imageUrl) {
        return static::create([
            'userId'       => $user->id,
            'name'         => $name,
            'contactEmail' => $contactEmail,
            'bioText'      => $bioText,
            'imageUrl'     => $imageUrl,
        ]);
    }

    public static function forUser(UserAuthentication $user) {
        return static::where('userId', '=', $user->id)->first();
    }
}