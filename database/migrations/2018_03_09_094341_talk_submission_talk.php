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
            $t->integer('speakerId');
            $t->string('title');
            $t->text('description');
            $t->text('notesForOrganizers');
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
