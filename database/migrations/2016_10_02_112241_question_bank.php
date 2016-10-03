<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ques_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('question');
            $table->string('flag');
            $table->string('points');
            $table->string('round_num')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ques_bank');
    }
}
