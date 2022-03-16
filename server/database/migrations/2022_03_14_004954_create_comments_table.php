<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('comment_id', true);
            $table->integer('visit_id');
            $table->integer('customer_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->date('comment_date');
            $table->text('comment_content');
            $table->dateTime('comment_created');
            $table->dateTime('comment_updated');
            $table->dateTime('comment_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
