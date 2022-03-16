<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->integer('booking_id', true);
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('visit_id');
            $table->integer('booking_type');
            $table->text('booking_color');
            $table->integer('booking_booking');
            $table->text('booking_title');
            $table->text('booking_comment');
            $table->date('booking_date');
            $table->dateTime('booking_starttime');
            $table->dateTime('booking_endtime');
            $table->integer('booking_fullday');
            $table->integer('booking_status');
            $table->integer('booking_checkedin');
            $table->dateTime('booking_checkedintime');
            $table->integer('booking_branch');
            $table->text('booking_unique');
            $table->integer('booking_option');
            $table->integer('booking_createdby');
            $table->integer('booking_updatedby');
            $table->dateTime('booking_created');
            $table->dateTime('booking_updated');
            $table->dateTime('booking_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
