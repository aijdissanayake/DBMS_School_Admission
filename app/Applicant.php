<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Applicant extends Model
{
    public function addApplicant($applicant_nic, $applicant_full_name, $applicant_name_initials, $applicant_relationship, $applicant_nationality, $applicant_religion, $applicant_address, $applicant_tel_no, $applicant_district) {

    	$success = DB::insert('INSERT INTO applicants (nic, full_name, name_with_initials, relationship, nationality, religion, address, tel_no, district) VALUES (?, ?,?, ?, ?, ?, ?, ?, ?)', [$applicant_nic, $applicant_full_name, $applicant_name_initials, $applicant_relationship, $applicant_nationality, $applicant_religion, $applicant_address, $applicant_tel_no, $applicant_district]);

    	return $success;
    }

    public function checkApplicantExists($nic){
    	if( DB::select("SELECT * FROM applicants WHERE nic=?",[$nic])){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public static function getApplicants(){
        $applicants = DB::select("SELECT * from applicants");
        return $applicants;
    }

}
