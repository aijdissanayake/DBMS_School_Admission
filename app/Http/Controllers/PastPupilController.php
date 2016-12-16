<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastPupil;

class PastPupilController extends Controller
{
    public function addNew(Request $request) {

    	$nic = $request['nic'];
    	$name = $request['name'];
    	$pastpupil = new PastPupil();
    	$pastpupil->addPupil($nic, $name);

    }
}
