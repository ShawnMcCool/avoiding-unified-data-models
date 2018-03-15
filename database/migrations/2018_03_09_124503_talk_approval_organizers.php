<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalkApprovalOrganizers extends Migration {

    public function up() {
        Schema::create('talk_approval_organizers', function (Blueprint $t) {
            $t->increments('id');
            $t->integer('userId');
            $t->string('name');
            $t->timestamps();
        });
    }

    public function down() {
        Schema::drop('talk_approval_organizers');
    }
}
