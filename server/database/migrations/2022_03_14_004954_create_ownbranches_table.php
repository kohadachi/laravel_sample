<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnbranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownbranches', function (Blueprint $table) {
            $table->integer('ownbranch_id', true);
            $table->integer('branch_id');
            $table->integer('user_id');
            $table->dateTime('ownbranch_created');
            $table->dateTime('ownbranch_updated');
            $table->dateTime('ownbranch_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownbranches');
    }
}
