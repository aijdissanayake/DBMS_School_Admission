<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantions', function (Blueprint $table) {
            $table->increments('id');
            $table->int('year')->unsigned();
            $table->integer('child_id');
            $table->string('applicant_id',10);
            $table->integer('category_id');
            $table->integer('total_marks')->unsigned();
            $table->timestamps();
            $table->foreign('child_id')->references('id')->on('children');
            $table->foreign('applicant_id')->references('nic')->on('applicants');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicantions');
    }
}
