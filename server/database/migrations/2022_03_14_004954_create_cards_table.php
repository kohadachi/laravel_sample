<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->integer('card_id', true);
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->text('card_name');
            $table->text('card_token');
            $table->integer('card_status');
            $table->text('card_type');
            $table->text('card_lastdigits');
            $table->text('card_expire');
            $table->integer('card_default');
            $table->dateTime('card_created');
            $table->dateTime('card_updated');
            $table->dateTime('card_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
