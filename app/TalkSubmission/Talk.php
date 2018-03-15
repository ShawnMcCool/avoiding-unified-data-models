<?php namespace App\TalkSubmission;

use Illuminate\Database\Eloquent\Model;
use App\Events\TalkWasSubmitted;

class Talk extends Model {

    protected $table = 'talk_submission_talks';
    protected $fillable = ['speakerId', 'title', 'description', 'notesForOrganizers'];

    public static function AllBy(Speaker $speaker) {
        return static::where('speakerId', '=', $speaker->id)->get();
    }

    public static function BySpeaker(Speaker $speaker, $talkId) {
        return static::where('speakerId', '=', $speaker->id)->find($talkId);
    }

    public static function submit(Speaker $speaker, $title, $description, $notesForOrganizers) {
        $talk = static::create([
            'speakerId'          => $speaker->id,
            'title'              => $title,
            'description'        => $description,
            'notesForOrganizers' => $notesForOrganizers,
        ]);

        event(new TalkWasSubmitted($talk->id, $talk->title, $talk->description, $talk->notesForOrganizers, $speaker->id, $speaker->name, $speaker->contactEmail, $speaker->bioText, $speaker->imageUrl));

        return $talk;
    }

    public function speaker() {
        return $this->belongsTo(Speaker::class, 'speakerId', 'id');
    }
}