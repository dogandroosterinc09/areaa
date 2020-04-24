<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterPageHomeslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_page_homesliders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id');
            $table->string('name', 255);
            $table->string('background_image', 255);
            $table->string('thumbnail_image', 255);
            $table->string('thumbnail_text', 255);
            $table->text('content');
            $table->text('button_label');
            $table->text('button_link');
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('chapter_page_homesliders');
    }
}
