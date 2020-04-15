<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherSponsorsToChapterHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapter_homes', function (Blueprint $table) {
            $table->text('other_sponsors')->after('top_sponsor');
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
            $table->dropColumn('other_sponsors');
        });
    }
}
