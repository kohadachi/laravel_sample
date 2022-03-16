<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraintypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traintypes', function (Blueprint $table) {
            $table->integer('traintype_id', true);
            $table->integer('traincat_id');
            $table->integer('user_id');
            $table->text('traintype_name');
            $table->dateTime('traintype_created');
            $table->dateTime('traintype_updated');
            $table->dateTime('traintype_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traintypes');
    }
}
