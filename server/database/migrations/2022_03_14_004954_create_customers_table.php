<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id', true);
            $table->text('customer_firstname');
            $table->text('customer_lastname');
            $table->text('customer_firstnamekana');
            $table->text('customer_lastnamekana');
            $table->date('customer_birthday');
            $table->integer('customer_sex');
            $table->integer('customer_postcode');
            $table->integer('state_id');
            $table->text('customer_city');
            $table->text('customer_address');
            $table->text('customer_phone');
            $table->text('customer_email');
            $table->text('customer_lineid');
            $table->integer('job_id');
            $table->integer('trigger_id');
            $table->text('customer_keyword');
            $table->text('customer_introduced');
            $table->text('customer_comment');
            $table->text('customer_unique');
            $table->text('customer_password');
            $table->integer('customer_status');
            $table->text('customer_stripe');
            $table->integer('customer_blacklisted');
            $table->integer('branch_id');
            $table->integer('customer_createdby');
            $table->integer('customer_updatedby');
            $table->dateTime('customer_created');
            $table->dateTime('customer_updated');
            $table->dateTime('customer_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
