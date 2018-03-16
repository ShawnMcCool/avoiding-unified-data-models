<?php namespace App\TalkApproval;

use App\UserAuthentication;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model {

    protected $table = 'talk_approval_organizers';
    protected $fillable = ['userId', 'name'];

    public static function forUser(UserAuthentication $user) {
        return static::where('userId', '=', $user->id)->first();
    }

    public static function register($userId, $name) {
        static::create(compact('userId', 'name'));
    }
}