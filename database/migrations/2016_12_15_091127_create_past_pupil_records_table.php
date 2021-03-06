<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastPupilRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_pupil_records', function (Blueprint $table) {
            $table->string('nic',10);
            $table->string('school_reg_no');
            $table->integer('no_years');
            $table->integer('edu_level');
            $table->integer('co_curr_level');
            $table->integer('ex_curr_level');
            $table->foreign('nic')->references('nic')->on('past_pupils');
            $table->foreign('school_reg_no')->references('reg_no')->on('schools');
            $table->primary('nic');
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
        Schema::dropIfExists('past_pupil_records');
    }
}
