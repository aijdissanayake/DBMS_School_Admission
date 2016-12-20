<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Child extends Model
{
    public function addChild($applicant_nic, $childInitials, $childDenotedName, $childSurname, $childGender, $childReligion, $childDOB, $childMedium) {
    	DB::insert('INSERT INTO children (applicant_nic, initials, denoted_name, surname, gender, religion, dob, medium) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [$applicant_nic, $childInitials, $childDenotedName, $childSurname, $childGender, $childReligion, $childDOB, $childMedium]);
    }
}
