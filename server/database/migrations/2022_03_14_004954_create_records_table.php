<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->integer('record_id', true);
            $table->integer('visit_id');
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('traincat_id');
            $table->integer('traintype_id');
            $table->integer('record_weight');
            $table->integer('record_times');
            $table->text('record_comment');
            $table->date('record_date');
            $table->dateTime('record_created');
            $table->dateTime('record_updated');
            $table->dateTime('record_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
