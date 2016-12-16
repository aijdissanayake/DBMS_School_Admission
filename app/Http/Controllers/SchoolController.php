<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class SchoolController extends Controller
{
    public function viewList(){

    	$regNo = '00001RC';
    	//create school instance
    	$school = new School();
    	//call methods in school.php model
    	$school_details = $school->getDetails($regNo)[0];
    	$past_pupil_applications = $school->getPastPupilApplications($regNo);
    	$proximity_applications = $school->getProximityApplications($regNo);
    	//return view
    	return view('School.application_list')
    		->with('past_pupil_applications',$past_pupil_applications)
    		->with('proximity_applications',$proximity_applications)
    		->with('school_details',$school_details);
    }
}
