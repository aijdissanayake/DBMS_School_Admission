<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastPupilMarkingScheme;

class markingSchemeController extends Controller
{
    
    public function addProximityMarkingScheme(Request $request){
    	//
    }

    public function addPastPupilMarkingScheme(Request $request){
   		$pastPupilMarking = new PastPupilMarkingScheme();
   		$pastPupilMarking->addMarkingScheme($request);
   		return view('addMarkingScheme');
    }
}
