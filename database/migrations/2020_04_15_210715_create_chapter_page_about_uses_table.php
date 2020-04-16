<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterPageAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_page_about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chapter_id');
            $table->text('content');
            $table->string('banner_image', 255);
            $table->integer('seo_meta_id');

            $table->longText('section_1');
            $table->longText('section_2');

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
        Schema::dropIfExists('chapter_page_about_us');
    }
}
