<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->integer('cart_id', true);
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('product_id');
            $table->integer('cart_type');
            $table->integer('cart_units');
            $table->integer('cart_status');
            $table->integer('order_id');
            $table->dateTime('cart_created');
            $table->dateTime('cart_updated');
            $table->dateTime('cart_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
