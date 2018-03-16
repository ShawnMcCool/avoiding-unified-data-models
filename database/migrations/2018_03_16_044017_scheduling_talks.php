<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SchedulingTalks extends Migration {

    public function up() {
        Schema::create('scheduling_talks', function (Blueprint $t) {
            $t->integer('id');
            $t->string('title');
            $t->text('description');
            $t->text('notes');
            $t->integer('speakerId');
            $t->string('speakerName');
            $t->string('speakerEmail');
            $t->text('speakerBio');
            $t->string('speakerImage');
            $t->timestamps();
        });
    }

    public function down() {
        Schema::drop('scheduling_talks');
    }
}
