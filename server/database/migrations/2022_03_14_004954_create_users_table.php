<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->integer('branch_id');
            $table->integer('position_id');
            $table->string('user_name', 50);
            $table->text('user_password');
            $table->text('user_email');
            $table->text('user_firstname');
            $table->text('user_lastname');
            $table->text('user_firstnamekana');
            $table->text('user_lastnamekana');
            $table->text('user_phone');
            $table->text('user_address');
            $table->text('user_lineid');
            $table->integer('user_reward');
            $table->text('user_restriction');
            $table->text('user_comment');
            $table->integer('user_type');
            $table->integer('user_status');
            $table->integer('user_booking');
            $table->text('user_secret');
            $table->text('user_image');
            $table->text('user_desc');
            $table->text('user_color');
            $table->dateTime('user_created');
            $table->dateTime('user_updated');
            $table->dateTime('user_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
