<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->integer('subscription_id', true);
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('coupon_id');
            $table->integer('subscription_original');
            $table->integer('subscription_discount');
            $table->integer('subscription_income');
            $table->integer('subscription_couponprice');
            $table->integer('subscription_times');
            $table->integer('subscription_minutes');
            $table->integer('subscription_price');
            $table->integer('subscription_extaxprice');
            $table->integer('subscription_paymethod');
            $table->integer('subscription_paystatus');
            $table->integer('subscription_status');
            $table->dateTime('subscription_paydate');
            $table->integer('subscription_used');
            $table->text('subscription_chargeid');
            $table->integer('subscription_cardfee');
            $table->dateTime('subscription_created');
            $table->dateTime('subscription_updated');
            $table->dateTime('subscription_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
