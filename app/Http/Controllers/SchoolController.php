<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function viewList(){
    	return view('School.application_list');
    }
}
