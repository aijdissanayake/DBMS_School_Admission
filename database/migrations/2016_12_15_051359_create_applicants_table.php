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
            $table->string('nic',10);
            $table->string('full_name');
            $table->string('name_with_initials');
            $table->integer('relationship')->unsigned();
            $table->string('nationality');
            $table->string('religion');
            $table->string('address');
            $table->char('tel_no',10);
            $table->string('district');
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
        Schema::dropIfExists('applicants');
    }
}
