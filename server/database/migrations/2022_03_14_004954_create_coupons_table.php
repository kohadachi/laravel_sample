<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->integer('coupon_id', true);
            $table->text('coupon_name');
            $table->text('coupon_code');
            $table->integer('coupon_discount');
            $table->integer('coupon_value');
            $table->integer('coupon_price');
            $table->text('coupon_comment');
            $table->integer('user_id');
            $table->dateTime('coupon_created');
            $table->dateTime('coupon_updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
