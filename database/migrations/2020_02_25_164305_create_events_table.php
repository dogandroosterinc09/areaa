<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumbnail');
            $table->string('slug');
            $table->longText('description');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->string('location_name');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->float('latitude')->default(0);
            $table->float('longitude');
            $table->decimal('amount', 10, 2);
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
        Schema::dropIfExists('events');
    }
}
