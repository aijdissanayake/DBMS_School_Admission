<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\School;

use App\User;

class SchoolController extends Controller
{
    public function viewList(){

    	$regNo = "477";
        $user_name = Auth::user()->username;
        if($user_name != 'admin' ){
        $regNo = $user_name;
        }
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
        $regNo = '477';
        $user_name = Auth::user()->username;
        if($user_name != 'admin' ){
        $regNo = $user_name;
        }
        $school = new School();

        $searchResults = $school->searchSchoolApps($regNo, $childName, $field);

        if(count($searchResults)){
            $results = [];


            foreach ($searchResults as $searchResult) {
                $name = $searchResult->denoted_name ." ". $searchResult->surname;
                $id = $searchResult->id;
                $details = array("name"=>$name , "id" => $id);
                
                array_push($results, $details);
                }

                $success = True;

        }
        
        else{
            $results = [];
            $success = False;
        }

        return response()->json([
                'results' => $results,
                'success' => $success
            ]);
    }
}
