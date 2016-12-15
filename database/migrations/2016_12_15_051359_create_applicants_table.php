<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('no');
            $table->string('nic',10);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('relationship');
            $table->string('nationality');
            $table->string('religion');
            $table->string('address');
            $table->char('tel_no',10);
            $table->string('district');
            $table->string('gn_division');
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
        Schema::dropIfExists('applicants');
    }
}
