<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('administration');
            $table->string('arts');
            $table->string('architecture');
            $table->string('business');
            $table->string('engineering');
            $table->string('education');
            $table->string('environmental');
            $table->string('fine_arts');
            $table->string('forestry');
            $table->string('medicine');
            $table->string('journalistm');
            $table->string('math');
            $table->string('music');
            $table->string('nursing');
            $table->string('other');
            $table->string('phys_ed');
            $table->string('science');
            $table->string('social_work');
            $table->string('trades');
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
        Schema::dropIfExists('questions');
    }
}
