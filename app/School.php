<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	public function getProximityApplications($regNo){

		// $proxApps = DB::select('select initials, surname, first_name, last_name from applications where active = ?', [1]);
			$proxApps = DB::select('SELECT initials, surname, total_marks FROM (applications INNER JOIN children ON applications.child_id = child.id) INNER JOIN proximity_applications ON proximity_applications.application_id = applications.id where active = ?', [1]);
	}

	public function getPastPupilApplications(){

	}
}
