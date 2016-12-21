<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicationViewMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        DB::statement("
            CREATE OR REPLACE VIEW application_proximity_schools AS
                SELECT application_id, no_er_years, no_schools_nearby,distance,applicant_id,school_reg_no,category_id,total_marks,name FROM (proximity_applications INNER JOIN applications ON proximity_applications.application_id = applications.id) INNER JOIN schools ON schools.reg_no = applications.school_reg_no
            ");

        DB::statement("
            CREATE OR REPLACE VIEW application_past_pupil_schools AS
                SELECT application_id,pp_name, applicant_id,school_reg_no,category_id,total_marks,name FROM (past_pupil_applications INNER JOIN applications ON past_pupil_applications.application_id = applications.id) INNER JOIN schools ON schools.reg_no = applications.school_reg_no
            ");


        DB::statement("
            CREATE OR REPLACE VIEW applicant_child AS
                SELECT nic,full_name, nationality, applicants.religion AS app_religion,address,tel_no,district, initials,denoted_name, surname, gender, children.religion AS child_religion , dob , medium FROM applicants INNER JOIN children ON applicants.nic = children.applicant_nic
        ");


        DB::statement("
            CREATE OR REPLACE VIEW all_proximity_application_details AS
                SELECT * FROM applicant_child INNER JOIN application_proximity_schools ON applicant_child.nic = application_proximity_schools.applicant_id
        ");

        DB::statement("
            CREATE OR REPLACE VIEW all_past_pupil_application_details AS
                SELECT * FROM applicant_child INNER JOIN application_past_pupil_schools ON applicant_child.nic = application_past_pupil_schools.applicant_id
        ");      


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
