<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('noc_number');
            $table->string('requirements');
            $table->string('outlook');
            $table->string('salary');
            $table->string('characteristics_fulltime');
            $table->string('characteristics_parttime');
            $table->string('characteristics_self_employed');
            $table->string('characteristics_employees');
            $table->string('characteristics_unemployment');
            $table->string('other');
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
        Schema::dropIfExists('jobs');
    }
}
