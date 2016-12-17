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
   		
   		return redirect('addMarkingScheme')->with('status', 'Scheme updated!');
    }

    public function addPastPupilMarkingScheme(Request $request){
   		$pastPupilMarking = new PastPupilMarkingScheme();
   		$pastPupilMarking->addMarkingScheme($request);
   		
   		return redirect('addMarkingScheme')->with('status', 'Scheme updated!');
    }
}
