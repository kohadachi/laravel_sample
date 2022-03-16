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
            $table->integer('order_id', true);
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('branch_id');
            $table->text('order_name');
            $table->text('order_email');
            $table->text('order_phone');
            $table->integer('order_grandtotal');
            $table->integer('order_todaystotal');
            $table->integer('order_extaxtodaystotal');
            $table->text('order_additioncomment');
            $table->integer('order_additionamount');
            $table->text('order_additioncomment8');
            $table->integer('order_additionamount8');
            $table->text('order_deductcomment');
            $table->integer('order_deductamount');
            $table->text('order_deductcomment8');
            $table->integer('order_deductamount8');
            $table->integer('order_paymethod');
            $table->integer('order_paystatus');
            $table->integer('order_status');
            $table->dateTime('order_paydate');
            $table->text('order_chargeid');
            $table->integer('order_cardfee');
            $table->integer('order_cash');
            $table->integer('order_balance');
            $table->dateTime('order_created');
            $table->dateTime('order_updated');
            $table->dateTime('order_deleted');
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
