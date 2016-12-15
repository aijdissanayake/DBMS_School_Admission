<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastPupilApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_pupil_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id');
            $table->string('school_reg_no');
            $table->foreign('applicantion_id')->references('id')->on('applicantions');
            $table->foreign('school_reg_no')->references('reg_no')->on('schools');
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
        Schema::dropIfExists('past_pupil_applications');
    }
}
