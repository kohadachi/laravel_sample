<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubbranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subbranches', function (Blueprint $table) {
            $table->integer('subbranch_id', true);
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('subbranch_duration');
            $table->dateTime('subbranch_created');
            $table->dateTime('subbranch_updated');
            $table->dateTime('subbranch_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subbranches');
    }
}
