<?php namespace App\TalkSubmission;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model {

    protected $table = 'talk_submission_talks';
    protected $fillable = ['speakerId', 'title', 'description', 'notesForOrganizers'];

    public static function BySpeaker(Speaker $speaker, $talkId) {
        return static::where('speakerId', '=', $speaker->id)->find($talkId);
    }

    public static function AllBy(Speaker $speaker) {
        return static::where('speakerId', '=', $speaker->id)->get();
    }

    public static function submit(Speaker $speaker, $title, $description, $notesForOrganizers) {
        return static::create([
            'speakerId'          => $speaker->id,
            'title'              => $title,
            'description'        => $description,
            'notesForOrganizers' => $notesForOrganizers,
        ]);
    }

    public function speaker() {
        return $this->belongsTo(Speaker::class, 'speakerId', 'id');
    }
}