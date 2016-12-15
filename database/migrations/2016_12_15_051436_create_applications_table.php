<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('year')->unsigned();
            $table->integer('child_id')->unsigned();
            $table->string('applicant_id',10);
            $table->integer('category_id')->unsigned();
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
        Schema::dropIfExists('applications');
    }
}
