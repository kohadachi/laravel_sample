<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->integer('stock_id', true);
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('product_id');
            $table->integer('stock_units');
            $table->integer('stock_unitprice');
            $table->text('stock_comment');
            $table->dateTime('stock_created');
            $table->dateTime('stock_updated');
            $table->dateTime('stock_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
