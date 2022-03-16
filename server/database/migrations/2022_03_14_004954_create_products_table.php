<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->integer('branch_id');
            $table->integer('category_id');
            $table->integer('coupon_id');
            $table->integer('product_type');
            $table->text('product_name');
            $table->text('product_desc');
            $table->text('product_code');
            $table->integer('product_tax');
            $table->integer('product_price');
            $table->integer('product_status');
            $table->integer('product_order');
            $table->integer('product_booking');
            $table->integer('product_times');
            $table->integer('product_timesusable');
            $table->integer('product_onetime');
            $table->integer('product_addition');
            $table->integer('product_additionprice');
            $table->integer('product_expire');
            $table->integer('product_expirevalue');
            $table->text('product_expireperiod');
            $table->integer('product_stock');
            $table->integer('product_stockalert');
            $table->integer('product_spreward');
            $table->integer('product_sprewardamount');
            $table->integer('product_sprewardtimes');
            $table->integer('product_reward');
            $table->integer('product_rewardtype');
            $table->integer('product_directsales');
            $table->text('product_image');
            $table->dateTime('product_created');
            $table->dateTime('product_updated');
            $table->dateTime('product_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
