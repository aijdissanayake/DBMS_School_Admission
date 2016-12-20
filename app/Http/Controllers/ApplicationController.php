<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use App\Applicant;
use App\Application;
use DB;

class ApplicationController extends Controller
{
	public function addNewApplication(Request $request){
		$category = $request['category'];

    	// Child details 

		$childSurname = $request['child_surname'];
		$childInitials = $request['child_name_initials'];
		$childDenotedNames = $request['child_names'];
		$childGender = $request['child_gender'];
		$childReligion = $request['child_religion'];
		$childDOB = $request['dob'];
		$childMedium = $request['medium'];


    	// Applicant details

		$applicant_nic = $request['nic'];
		$applicant_full_name = $request['applicant_name'];
		$applicant_name_initials = $request['applicant_name_initials'];
		$applicant_relationship = $request['applicant_relationship'];
		$applicant_nationality = $request['nationality_sl'];
		$applicant_religion = $request['applicant_religion'];
		$applicant_address = $request['perm_address'];
		$applicant_tel_no = $request['applicant_tp'];
		$applicant_district = $request['district'];

    	// Application details

		$app_pref_1 = $request['pref_1'];
		$app_pref_2 = $request['pref_2'];
		$app_pref_3 = $request['pref_3'];
		$app_pref_4 = $request['pref_4'];
		$app_pref_5 = $request['pref_5'];
		$app_pref_6 = $request['pref_6'];

		$app_year = date('Y')+1;
		$app_school = $request['school'];
		$app_marks = 1;



		$child = new Child();
		$applicant = new Applicant();
		$application = new Application();

		DB::beginTransaction();

		if (!($applicant->checkApplicantExists($applicant_nic))){
			$applicant_added = $applicant->addApplicant($applicant_nic, $applicant_full_name, $applicant_name_initials, $applicant_relationship, $applicant_nationality, $applicant_religion, $applicant_address, $applicant_tel_no, $applicant_district);
		}


		$child_id = $child->addChild($applicant_nic, $childInitials, $childDenotedNames, $childSurname, $childGender, $childReligion, $childDOB, $childMedium);

		if ($child_id){
			$application_added = $application->createApplication($app_year, $child_id, $applicant_nic, $app_school, $app_pref_1, $app_pref_2, $app_pref_3,$app_pref_4,$app_pref_5, $app_pref_6, $category, $app_marks);
		}

		DB::commit();



		if ($category == "0"){
			return view('new_application.pastPupilApplication');
		}
		elseif ($category == "1") {
			return view('new_application.proximityApplication');
		}
	}
}
