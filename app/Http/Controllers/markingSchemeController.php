<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastPupilMarkingScheme;
use App\ProximityMarkingScheme;

class markingSchemeController extends Controller
{
    
    public function addProximityMarkingScheme(Request $request){
    	//
    	$proximityMarking = new ProximityMarkingScheme();
   		$proximityMarking->addMarkingScheme($request);
   		return view('addMarkingScheme');
    }

    public function addPastPupilMarkingScheme(Request $request){
   		$pastPupilMarking = new ProximityMarkingScheme();
   		$pastPupilMarking->addMarkingScheme($request);
   		return view('addMarkingScheme');
    }
}
