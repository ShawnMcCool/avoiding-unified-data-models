<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalkApprovalTalks extends Migration {

    public function up() {
        Schema::create('talk_approval_submitted_talks', function (Blueprint $t) {
            $t->integer('id');
            $t->string('title');
            $t->text('description');
            $t->text('notes');
            $t->integer('speakerId');
            $t->string('speakerName');
            $t->string('speakerEmail');
            $t->text('speakerBio');
            $t->string('speakerImage');
            $t->boolean('isApproved');
            $t->integer('approvedByOrganizer')->nullable();
            $t->timestamps();
        });
    }

    public function down() {
        Schema::drop('talk_approval_submitted_talks');
    }
}
