<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('amount');
            $table->string('number_transaction');
            $table->boolean('is_deposit');
            $table->string('state');
            $table->string('payment_date');

            // Foreign keys
            $table->integer('bank_id')->unsigned();
            $table->foreign('bank_id')->references('id')->on('category');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('category');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('category');

            // Timestamps
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
        Schema::drop('payment');
    }
}
