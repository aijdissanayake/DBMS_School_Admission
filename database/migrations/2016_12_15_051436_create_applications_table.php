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
            $table->string('school_reg_no');            
            $table->string('pref_1');
            $table->string('pref_2');
            $table->string('pref_3');
            $table->string('pref_4');
            $table->string('pref_5');
            $table->string('pref_6');
            $table->integer('category_id')->unsigned();
            $table->integer('total_marks')->unsigned();
            $table->timestamps();
            $table->foreign('child_id')->references('id')->on('children');
            $table->foreign('applicant_id')->references('nic')->on('applicants');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('school_reg_no')->references('reg_no')->on('schools');            
            $table->foreign('pref_1')->references('reg_no')->on('schools');
            $table->foreign('pref_2')->references('reg_no')->on('schools');
            $table->foreign('pref_3')->references('reg_no')->on('schools');            
            $table->foreign('pref_4')->references('reg_no')->on('schools');
            $table->foreign('pref_5')->references('reg_no')->on('schools');
            $table->foreign('pref_6')->references('reg_no')->on('schools');
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
