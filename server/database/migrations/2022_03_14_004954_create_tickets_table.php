<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->integer('ticket_id', true);
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('customer_id');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('cart_id');
            $table->integer('coupon_id');
            $table->integer('ticket_original');
            $table->integer('ticket_discount');
            $table->integer('ticket_income');
            $table->integer('ticket_couponprice');
            $table->integer('ticket_times');
            $table->integer('ticket_minutes');
            $table->integer('ticket_price');
            $table->integer('ticket_extaxprice');
            $table->integer('ticket_paymethod');
            $table->integer('ticket_paystatus');
            $table->dateTime('ticket_paydate');
            $table->integer('ticket_status');
            $table->integer('ticket_expirevalue');
            $table->text('ticket_expireperiod');
            $table->integer('ticket_used');
            $table->dateTime('ticket_created');
            $table->dateTime('ticket_updated');
            $table->dateTime('ticket_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
