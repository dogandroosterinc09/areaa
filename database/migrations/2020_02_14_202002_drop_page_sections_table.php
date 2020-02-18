<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('page_sections');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id');
            $table->string('section', 255);
            $table->text('content');
            $table->string('type', 255)->comment('input, textarea, file, ckeditor');
            $table->integer('position');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
