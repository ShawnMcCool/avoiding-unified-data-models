<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalkSubmissionTalk extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('talk_submission_talks', function (Blueprint $t) {
            $t->increments('id');
            $t->string('title');
            $t->text('description');
            $t->text('notesForOrganizers');
            $t->integer('speakerId');
            $t->string('speakerName');
            $t->string('speakerContactEmail');
            $t->text('speakerBioText');
            $t->string('speakerImageUrl');
            $t->integer('approvedByOrganizerId');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('talk_submission_talks');
    }
}
