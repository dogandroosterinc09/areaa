<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id')->nullable();
            $table->integer('event_id');
            $table->integer('chapter_event_id');
            $table->integer('event_chapter_id');            
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('email', 45);
            $table->string('phone', 250);
            $table->tinyInteger('is_member');
            $table->integer('status');
            $table->integer('member_chapter_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
}
