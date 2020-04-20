<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPageDetailsToChapterHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapter_homes', function (Blueprint $table) {
            $table->text('content')->after('chapter_id');
            $table->string('banner_image', 255)->after('content');
            $table->integer('seo_meta_id')->after('banner_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chapter_homes', function (Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('banner_image');
            $table->dropColumn('seo_meta_id');
        });
    }
}
