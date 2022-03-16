<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('profile_id', true);
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('purpose_id');
            $table->text('profile_target');
            $table->integer('profile_diet');
            $table->integer('profile_exercise');
            $table->integer('profile_nodiet');
            $table->integer('profile_sports');
            $table->integer('profile_nosports');
            $table->text('profile_sportnames');
            $table->text('profile_worrying');
            $table->text('profile_otherworries');
            $table->text('profile_size');
            $table->integer('profile_weight');
            $table->integer('profile_fat');
            $table->integer('profile_muscles');
            $table->dateTime('profile_created');
            $table->dateTime('profile_updated');
            $table->dateTime('profile_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
