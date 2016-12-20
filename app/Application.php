<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function createApplication($app_year, $child_id, $applicant_id, $school_reg_no, $app_pref_1, $app_pref_2, $app_pref_3,$app_pref_4,$app_pref_5, $app_pref_6, $category, $app_marks) {
    	$success = DB::insert('INSERT INTO applications (year, child_id, applicant_id, school_reg_no, pref_1, pref_2, pref_3, pref_4, pref_5, pref_6, category_id, total_marks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$app_year, $child_id, $applicant_id, $school_reg_no, $app_pref_1, $app_pref_2, $app_pref_3,$app_pref_4,$app_pref_5, $app_pref_6, $category, $app_marks]);

    	if ($success){
    		$application_id = DB::select('SELECT LAST_INSERT_ID() as aID');
    		return $application_id[0]->aID;

    	}
    	else{
    		return false;
    	}
    }
}
