<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('setting_id', true);
            $table->text('setting_sitename');
            $table->text('setting_siteurl');
            $table->text('setting_email');
            $table->text('setting_manager');
            $table->text('setting_apipublic');
            $table->text('setting_apisecret');
            $table->integer('setting_stripefee');
            $table->integer('setting_bank');
            $table->text('setting_bankinfo');
            $table->integer('setting_paypay');
            $table->integer('setting_cash');
            $table->dateTime('setting_created');
            $table->dateTime('setting_updated');
            $table->dateTime('setting_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
