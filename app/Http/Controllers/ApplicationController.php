<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use App\Applicant;
use App\Application;
use DB;
use App\PastPupilApplication;
use App\ProximityApplication;

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
			$application_id = $application->createApplication($app_year, $child_id, $applicant_nic, $app_school, $app_pref_1, $app_pref_2, $app_pref_3,$app_pref_4,$app_pref_5, $app_pref_6, $category, $app_marks);
		}

		DB::commit();

		if ($application_id){
			if ($category == "1"){
				return view('new_application.pastPupilApplication', compact('application_id'));
			}
			elseif ($category == "2") {
				return view('new_application.proximityApplication', compact('application_id'));
			}


		}

		
	}

	public function addNewPastPupilApplication(Request $request, $application_id){
		$pp_name = $request['pp_name'];
		$pp_name_initials = $request['pp_name_initials'];
		$pp_nic = $request['pp_nic'];

		$pp_app_id = PastPupilApplication::createPPApplication($application_id, $pp_name, $pp_name_initials, $pp_nic);

		

		if ($pp_app_id){
			return redirect()->route('viewPPApplication', $application_id);
		}
		else{
			$errors = "Something went wrong. Please re-check the details you entered. If you think this is a system fault, please contact the development team.";
			return view('new_application.pastPupilApplication', compact('application_id', 'errors'));
		}



	}



	public function addNewProximityApplication(Request $request, $application_id){
		$no_er_years = $request['no_er_years'];
		$no_schools_nearby = $request['no_schools_nearby'];
		$distance = $request['distance'];

		$px_app_id = ProximityApplication::createPxApplication($application_id, $no_er_years, $no_schools_nearby, $distance);


		if ($px_app_id){
			return redirect()->route('viewPxApplication', $application_id);
		}
		else{
			$errors = array("Something went wrong. Please re-check the details you entered. If you think this is a system fault, please contact the development team.")	;
			return view('new_application.proximityApplication', compact('application_id', 'errors'));
		}
		
	}

	public function viewPastPupilApplication($app_id){
		$pp_application = PastPupilApplication::findApplication($app_id);

		if ($pp_application){
			return view('new_application.viewPPApplication', compact('pp_application'));
		}
		else{
			return view('errors.404');
		}

		
	}

	public function viewPxApplication($app_id){
		$px_application = ProximityApplication::findApplication($app_id);

		if ($px_application){
			return view('new_application.viewPxApplication', compact('px_application'));
		}
		else{
			return view('errors.404');
		}

		
	}

	public function viewApp(Request $request){

		$id = $request['results'];
		$category_id = Application::getCategory($id);

		if($category_id){
			if ($category_id == 2) {
				return redirect()->route('viewPxApplication', ['id' => $id]);
			}
			elseif ($category_id==1){
				return redirect()->route('viewPPApplication', ['id' => $id]);
			}
			else{
				echo $category_id;
			}
		}

		else{
			return view('errors.404');
		}

	}

	public function viewAllApp() {

		$allProxApps = ProximityApplication::getAllApps();
		$allPPApps = PastPupilApplication::getAllApps();

		return view('all_applications')
			->with('allProxApps',$allProxApps)
			->with('allPPApps',$allPPApps);
	}

	public function searchAllApps(Request $request){

        $field = $request['field'];
        $childName = $request['childName'];

        $searchResults = Application::searchAllApps($childName, $field);

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
