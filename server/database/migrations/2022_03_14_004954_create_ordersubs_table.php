<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersubs', function (Blueprint $table) {
            $table->integer('ordersub_id', true);
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('cart_id');
            $table->integer('coupon_id');
            $table->integer('reason_id');
            $table->integer('ordersub_original');
            $table->integer('ordersub_discount');
            $table->integer('ordersub_income');
            $table->integer('ordersub_couponprice');
            $table->integer('ordersub_status');
            $table->integer('ordersub_price');
            $table->integer('ordersub_extaxprice');
            $table->integer('ordersub_paymethod');
            $table->integer('ordersub_booking');
            $table->date('ordersub_lastsub');
            $table->text('ordersub_reason');
            $table->dateTime('ordersub_created');
            $table->dateTime('ordersub_updated');
            $table->dateTime('ordersub_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersubs');
    }
}
