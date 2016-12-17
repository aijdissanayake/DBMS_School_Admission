<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastPupil;
use App\PastPupilRecord;
use Illuminate\Http\RedirectResponse;

class PastPupilController extends Controller
{
    public function addNew(Request $request) {
    	$nic = $request['nicNum'];
    	$name = $request['name'];
    	$pastpupil = new PastPupil();
    	$pastpupil->addPupil($nic, $name);
    	return redirect(route('newPastPupil'))->with('status', 'New past pupil was successfully added! You may continue adding more.');
    }

    public function addNewRecord(Request $request) {
    	$nic = $request['nicNum'];
    	$regNum = $request['regNum'];
    	$years = (int)$request['years'];
    	$eduLevel = (int)$request['edu_level'];
    	$coCurLevel = (int)$request['co_curricular_level'];
    	$exCurLevel = (int)$request['extra_curricular_level'];
    	$pastpupilRecord = new PastPupilRecord();
    	$pastpupilRecord->addRecord($nic, $regNum, $years, $eduLevel, $coCurLevel, $exCurLevel);
    	return redirect(route('newPastPupilRecord'))->with('status', 'Past pupil records were successfully added! You may continue adding more.');
    }
}
