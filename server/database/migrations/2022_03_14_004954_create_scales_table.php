<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scales', function (Blueprint $table) {
            $table->integer('scale_id', true);
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('branch_id');
            $table->integer('visit_id');
            $table->date('scale_date');
            $table->integer('scale_weight');
            $table->integer('scale_fat');
            $table->integer('scale_skeleton');
            $table->integer('scale_muscle');
            $table->dateTime('scale_created');
            $table->dateTime('scale_updated');
            $table->dateTime('scale_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scales');
    }
}
