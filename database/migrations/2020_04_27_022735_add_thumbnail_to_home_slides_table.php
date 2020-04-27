<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailToHomeSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_slides', function (Blueprint $table) {
            $table->string('thumbnail_image', 255)->after('background_image');
            $table->string('thumbnail_text', 255)->after('thumbnail_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_slides', function (Blueprint $table) {
            $table->dropColumn('thumbnail_image');
            $table->dropColumn('thumbnail_text');
        });
    }
}
