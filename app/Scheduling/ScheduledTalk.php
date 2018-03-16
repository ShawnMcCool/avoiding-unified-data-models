<?php namespace App\Scheduling;

use Illuminate\Database\Eloquent\Model;

class ScheduledTalk extends Model {

    protected $table = 'scheduling_talks';

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
    ];

    public static function schedule(
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
        return static::create(compact(
            'id',
            'title',
            'description',
            'notes',
            'speakerId',
            'speakerName',
            'speakerEmail',
            'speakerBio',
            'speakerImage'
        ));
    }
}