<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('address');
            $table->string('country');
            $table->string('postalcode');
            $table->string('status');
            $table->foreignId('product_id');
            $table->integer('quantity');
            $table->string('size');
            $table->string('color');
            $table->string('material');
            $table->string('slug');
            $table->string('title');
            $table->mediumText('description');
            $table->string('image');
            $table->bigInteger('price');
            $table->integer('stars');
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
        Schema::dropIfExists('orders');
    }
}
