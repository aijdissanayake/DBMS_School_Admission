<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProximityApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximity_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id');
            $table->integer('no_er_years');
            $table->integer('no_schools_nearby');
            $table->string('pref_1');
            $table->string('pref_2');
            $table->string('pref_3');
            $table->string('pref_4');
            $table->string('pref_5');
            $table->string('pref_6');
            $table->foreign('applicantion_id')->references('id')->on('applicantions');
            $table->foreign('pref_1')->references('reg_no')->on('schools');
            $table->foreign('pref_2')->references('reg_no')->on('schools');
            $table->foreign('pref_3')->references('reg_no')->on('schools');            
            $table->foreign('pref_4')->references('reg_no')->on('schools');
            $table->foreign('pref_5')->references('reg_no')->on('schools');
            $table->foreign('pref_6')->references('reg_no')->on('schools');
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
        Schema::dropIfExists('proximity_applications');
    }
}
