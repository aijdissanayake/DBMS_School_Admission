<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastPupilMarkingSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_pupil_marking_schemes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('edu_mult');
            $table->integer('co_curr_mult');
            $table->integer('ex_curr_mult');
            $table->integer('years_mult');
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
        Schema::dropIfExists('past_pupil_marking_schemes');
    }
}
