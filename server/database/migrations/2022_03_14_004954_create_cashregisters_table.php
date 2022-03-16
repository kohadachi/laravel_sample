<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashregisters', function (Blueprint $table) {
            $table->integer('cashregsiter_id', true);
            $table->integer('branch_id');
            $table->integer('user_id');
            $table->integer('cashregsiter_cashsale');
            $table->integer('cashregsiter_cardsale');
            $table->integer('cashregsiter_paypaysale');
            $table->integer('cashregsiter_banksale');
            $table->integer('cashregsiter_subsale');
            $table->integer('cashregsiter_cashrefund');
            $table->integer('cashregsiter_cardrefund');
            $table->integer('cashregsiter_paypayrefund');
            $table->integer('cashregsiter_bankrefund');
            $table->integer('cashregsiter_saletotal');
            $table->integer('cashregsiter_refundtotal');
            $table->integer('cashregsiter_cashlastday');
            $table->integer('cashregsiter_cashtotal');
            $table->integer('cashregsiter_cashavailable');
            $table->integer('cashregsiter_cashnext');
            $table->integer('cashregsiter_cashmove');
            $table->integer('cashregsiter_cashover');
            $table->integer('cashregsiter_cashshort');
            $table->text('cashregsiter_comment');
            $table->date('cashregsiter_date');
            $table->dateTime('cashregsiter_created');
            $table->dateTime('cashregsiter_updated');
            $table->dateTime('cashregsiter_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashregisters');
    }
}
