<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Child extends Model
{
    public function addChild($applicant_nic, $childInitials, $childDenotedName, $childSurname, $childGender, $childReligion, $childDOB, $childMedium) {

    	$success = DB::insert('INSERT INTO children (applicant_nic, initials, denoted_name, surname, gender, religion, dob, medium) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [$applicant_nic, $childInitials, $childDenotedName, $childSurname, $childGender, $childReligion, $childDOB, $childMedium]);

    	if ($success){
    		$child_id = DB::select('SELECT LAST_INSERT_ID() as cID');
    		return $child_id[0]->cID;

    	}
    	else{
    		return false;
    	}
    }

}
