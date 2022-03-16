<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->integer('good_id', true);
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('cart_id');
            $table->integer('coupon_id');
            $table->integer('good_original');
            $table->integer('good_discount');
            $table->integer('good_income');
            $table->integer('good_couponprice');
            $table->integer('good_price');
            $table->integer('good_extaxprice');
            $table->integer('good_units');
            $table->integer('good_paymethod');
            $table->integer('good_paystatus');
            $table->dateTime('good_paydate');
            $table->integer('good_status');
            $table->dateTime('good_created');
            $table->dateTime('good_updated');
            $table->dateTime('good_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
