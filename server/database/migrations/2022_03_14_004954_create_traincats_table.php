<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraincatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traincats', function (Blueprint $table) {
            $table->integer('traincat_id', true);
            $table->integer('user_id');
            $table->text('traincat_name');
            $table->dateTime('traincat_created');
            $table->dateTime('traincat_updated');
            $table->dateTime('traincat_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traincats');
    }
}
