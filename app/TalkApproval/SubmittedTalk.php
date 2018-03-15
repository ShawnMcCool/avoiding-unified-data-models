<?php namespace App\TalkApproval;

use Illuminate\Database\Eloquent\Model;
use App\Events\TalkWasApproved;

class SubmittedTalk extends Model {

    protected $table = "talk_approval_submitted_talks";

    protected $fillable = [
        'id',
        'title',
        'description',
        'notes',
        'speakerId',
        'speakerName',
        'speakerEmail',
        'speakerBio',
        'speakerImage',
        'isApproved',
    ];

    public static function register(
        $id,
        $title,
        $description,
        $notes,
        $speakerId,
        $speakerName,
        $speakerEmail,
        $speakerBio,
        $speakerImage
    ) {
        $isApproved = false;
        return static::create(compact(
            'id',
            'title',
            'description',
            'notes',
            'speakerId',
            'speakerName',
            'speakerEmail',
            'speakerBio',
            'speakerImage',
            'isApproved'
        ));
    }

    public static function unapproved() {
        return static::where('isApproved', '=', false)->get();
    }

    public static function approved() {
        return static::where('isApproved', '=', true)->get();
    }

    public static function approveBy($talkId, Organizer $organizer) {
        $talk = static::findOrFail($talkId);
        $talk->isApproved = true;
        $talk->approvedByOrganizer = $organizer->id;
        $talk->save();

        event(new TalkWasApproved($talk->id, $talk->title, $talk->description, $talk->notes, $talk->speakerId, $talk->speakerName, $talk->speakerEmail, $talk->speakerBio, $talk->speakerImage));

    }
}