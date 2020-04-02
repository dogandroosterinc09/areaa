<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chapter_id')->unique();

            $table->string('who_we_are_title');
            $table->string('who_we_are_featured_image');
            $table->string('who_we_are_featured_image_alt');
            $table->text('who_we_are_content');
            $table->string('who_we_are_button1_text');
            $table->string('who_we_are_button1_link');
            $table->string('who_we_are_button2_text');
            $table->string('who_we_are_button2_link');

            $table->string('member_benefits_title');
            $table->string('member_benefits_featured_image');
            $table->string('member_benefits_featured_image_alt');
            $table->text('member_benefits_content');
            $table->text('member_benefits_items');
            $table->string('member_benefits_button1_text');
            $table->string('member_benefits_button1_link');
            $table->string('member_benefits_button2_text');
            $table->string('member_benefits_button2_link');

            $table->string('sponsors_title');
            $table->text('sponsors_content');
            $table->string('sponsors_button1_text');
            $table->string('sponsors_button1_link');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_homes');
    }
}
