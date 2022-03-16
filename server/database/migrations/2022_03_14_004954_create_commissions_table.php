<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->integer('commission_id', true);
            $table->integer('product_id');
            $table->integer('ranking_id');
            $table->integer('commission_type');
            $table->integer('commission_rate');
            $table->dateTime('commission_created');
            $table->dateTime('commission_updated');
            $table->dateTime('commission_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
}
