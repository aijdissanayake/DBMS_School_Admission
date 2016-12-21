<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastPupilMarkingScheme;
use App\ProximityMarkingScheme;
use Illuminate\Support\Facades\DB;

class markingSchemeController extends Controller
{
    
    public function addProximityMarkingScheme(Request $request){
    	//
    	$proximityMarking = new ProximityMarkingScheme();
   		$proximityMarking->addMarkingScheme($request);
   		

      $pastPupil = DB::select('select * from past_pupil_marking_schemes where active=1 limit 1');
      $proximity = DB::select('select * from proximity_marking_schemes where active=1');
   		return redirect('addMarkingScheme')->with('pastPupilScheme', $pastPupil)->with('proximityScheme',$proximity);
    }

    public function addPastPupilMarkingScheme(Request $request){
   		$pastPupilMarking = new PastPupilMarkingScheme();
   		$pastPupilMarking->addMarkingScheme($request);
   		
      $pastPupil = DB::select('select * from past_pupil_marking_schemes where active=1 limit 1');
      $proximity = DB::select('select * from proximity_marking_schemes where active=1');
   		return redirect('addMarkingScheme')->with('pastPupilScheme', $pastPupil)->with('proximityScheme',$proximity);
    }

    public function viewMarkingSchemeTab(){
      $pastPupil = DB::select('select * from past_pupil_marking_schemes where active=1 limit 1');
      $proximity = DB::select('select * from proximity_marking_schemes where active=1');
      return view('addMarkingScheme')->with('pastPupilScheme', $pastPupil)->with('proximityScheme',$proximity);
    }
}
