<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->integer('branch_id', true);
            $table->text('branch_name');
            $table->integer('state_id');
            $table->text('branch_city');
            $table->text('branch_address');
            $table->text('branch_phone');
            $table->text('branch_lineid');
            $table->text('branch_email');
            $table->text('branch_map');
            $table->text('branch_access');
            $table->text('branch_desc');
            $table->text('branch_url');
            $table->time('branch_starttime');
            $table->time('branch_endtime');
            $table->integer('branch_members');
            $table->integer('branch_status')->default(1);
            $table->dateTime('branch_created');
            $table->dateTime('branch_updated');
            $table->dateTime('branch_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
