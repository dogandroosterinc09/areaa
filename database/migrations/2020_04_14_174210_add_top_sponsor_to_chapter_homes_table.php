<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopSponsorToChapterHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapter_homes', function (Blueprint $table) {
            $table->text('top_sponsor')->after('sponsors_filters');
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
            $table->dropColumn('top_sponsor');
        });
    }
}
