<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('applicant_nic',10);
            $table->string('initials',20);
            $table->string('denoted_name');
            $table->string('surname');
            $table->boolean('gender');
            $table->string('religion');
            $table->date('dob');
            $table->string('medium');
            $table->timestamps();
            $table->foreign('applicant_nic')->references('nic')->on('applicants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
