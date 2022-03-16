<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->integer('mail_id', true);
            $table->integer('mail_order');
            $table->integer('mail_status');
            $table->text('mail_titile');
            $table->text('mail_tags');
            $table->text('mail_subject');
            $table->text('mail_content');
            $table->integer('mail_updatedby');
            $table->dateTime('mail_created');
            $table->dateTime('mail_updated');
            $table->dateTime('mail_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
