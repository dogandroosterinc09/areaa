<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->mediumText('transaction_label');
            $table->string('transaction_invoice', 50);
            $table->string('transaction_reference', 50);
            $table->decimal('transaction_amount', 10,2);
            $table->mediumText('notes1');
            $table->mediumText('notes2');
            $table->tinyInteger('is_subscription');
            $table->tinyInteger('is_success');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('transactions');
    }
}
