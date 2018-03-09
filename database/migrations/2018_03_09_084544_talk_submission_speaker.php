<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TalkSubmissionSpeaker extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('talk_submission_speaker', function(Blueprint $t) {
            $t->increments('id');
            $t->integer('userId');
            $t->string('name');
            $t->string('contactEmail');
            $t->text('bioText');
            $t->string('imageUrl');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('talk_submission_speaker');
    }
}
