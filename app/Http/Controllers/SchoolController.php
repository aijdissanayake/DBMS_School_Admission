<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

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

    public function addNew(Request $request) {
        $regNum = $request['regNum'];
        $name = $request['name'];
        $password = Hash::make($request['password']);
        $school = new School();
        $school->register($regNum, $name, $password);
        return redirect(route('newSchool'))->with('status', 'New school has been successfully added! You may continue adding more.');
    }

    public function searchSchoolApps(Request $request){

        $field = $request['field'];
        $childName = $request['childName'];
        $regNo = '00001RC';
        $school = new School();

        try{

        $searchResults = $school->searchSchoolApps($regNo, $childName, $field);
        $success = 'success';

        }

        catch (Exception $e) {

            $success =  $e->getMessage();
        }

        return response()->json([
                'sessions' => $success
            ]);
    }
}
