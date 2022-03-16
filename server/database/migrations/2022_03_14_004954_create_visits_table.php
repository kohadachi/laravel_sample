<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->integer('visit_id', true);
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('ticket_id');
            $table->integer('subscription_id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('booking_id');
            $table->integer('visit_duration');
            $table->integer('visit_commission');
            $table->integer('visit_specialcounts');
            $table->integer('visit_customerok');
            $table->integer('visit_adminok');
            $table->integer('visit_adminng');
            $table->integer('visit_userok');
            $table->integer('visit_checkmail');
            $table->text('visit_unique');
            $table->date('visit_date');
            $table->dateTime('visit_start');
            $table->dateTime('visit_end');
            $table->dateTime('visit_created');
            $table->dateTime('visit_updated');
            $table->dateTime('visit_deleted');
            $table->dateTime('visit_scanned');
            $table->dateTime('visit_adminapproved');
            $table->dateTime('visit_confirmed');
            $table->dateTime('visit_mailchecked');
            $table->integer('visit_payonly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
