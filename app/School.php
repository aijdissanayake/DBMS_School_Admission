<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class School extends Model
{
	public function getProximityApplications($regNo){

		// $proxApps = DB::select('select initials, surname, first_name, last_name from applications where active = ?', [1]);
			$proxApps = DB::select('SELECT initials,denoted_name, surname, total_marks FROM (applications INNER JOIN children ON applications.child_id = children.id) INNER JOIN proximity_applications ON proximity_applications.application_id = applications.id where school_reg_no = ? ORDER BY total_marks DESC', [$regNo]);

			return $proxApps;
	}

	public function getPastPupilApplications($regNo){

			$ppApps = DB::select('SELECT initials, surname,denoted_name, total_marks FROM (applications INNER JOIN children ON applications.child_id = children.id) INNER JOIN past_pupil_applications ON past_pupil_applications.application_id = applications.id where school_reg_no = ? ORDER BY total_marks DESC', [$regNo]);

			return $ppApps;

	}

	public function getDetails($regNo){

			$details = DB::select('SELECT * FROM schools WHERE reg_no = ?',[$regNo]);
			return $details;

	}

	public function register($regNum, $name, $password) {
		DB::insert('INSERT INTO schools (reg_no, name, password) VALUES (?, ?, ?)', [$regNum, $name, $password]);
	}


	public function getSchools(){

		$schools = DB::select('SELECT * FROM schools');
		return $schools;

	}

	public function searchSchoolApps($regNo, $childName, $field){

		$guess = "%".$childName."%";

		if($field = "surname"){

		$applications = DB::select('SELECT applications.id AS id ,surname, denoted_name FROM applications INNER JOIN children ON applications.child_id = children.id where school_reg_no = ? AND surname LIKE ? LIMIT 10', [$regNo , $guess]);

		return $applications;

		}

		elseif($field = "denoted_name"){

			$applications = DB::select('SELECT initials, surname,denoted_name, total_marks FROM applications INNER JOIN children ON applications.child_id = children.id where school_reg_no = ? AND denoted_name LIKE ? LIMIT 10', [$regNo ,$guess]);

		return $applications;
		}
	
	}
}