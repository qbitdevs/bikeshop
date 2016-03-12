<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('active');
            $table->string('brand');
            $table->string('cost');
            $table->string('description');
            $table->string('gender');
            $table->boolean('is_offer');
            $table->string('name');
            $table->string('quantity');

            // Foreign keys
            $table->integer('category_id')->unsigned(); 
            $table->foreign('category_id')->references('id')->on('category');
            
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
        Schema::drop('product');
    }
}
