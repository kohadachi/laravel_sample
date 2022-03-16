<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('category_id', true);
            $table->integer('category_type');
            $table->integer('category_status');
            $table->integer('category_order');
            $table->text('category_name');
            $table->text('category_desc');
            $table->dateTime('category_created');
            $table->dateTime('category_updated');
            $table->dateTime('category_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
