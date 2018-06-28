<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Votetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('oppo_1');
            $table->string('oppo_2');
            $table->string('won');
            $table->string('lost');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vote_table');
    }
}
