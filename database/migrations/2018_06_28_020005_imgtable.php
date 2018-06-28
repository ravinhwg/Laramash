<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imgtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgtable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->string('rank')->nullable();
            $table->string('votes')->nullable();
            $table->string('wiki_link')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
            $table->string('extra4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imgtable');
    }
}
