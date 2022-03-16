<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->integer('refund_id', true);
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('ordersub_id');
            $table->integer('ticket_id');
            $table->integer('good_id');
            $table->integer('customer_id');
            $table->integer('branch_id');
            $table->integer('user_id');
            $table->integer('refund_units');
            $table->integer('refund_price');
            $table->integer('refund_times');
            $table->integer('refund_used');
            $table->integer('refund_cardfee');
            $table->integer('refund_amount');
            $table->integer('refund_extaxamount');
            $table->integer('refund_method');
            $table->date('refund_date');
            $table->dateTime('refund_created');
            $table->dateTime('refund_updated');
            $table->dateTime('refund_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refunds');
    }
}
