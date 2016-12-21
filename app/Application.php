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

    public static function getCategory($id){

        $category_id = DB::select('SELECT category_id from applications WHERE id = ?',[$id]);
        $category_id = $category_id[0]->category_id;
        return $category_id;
    }

    public static function viewAllApp() {
        $allApps = DB::select('SELECT * FROM applications_summary');
        return $allApps;
    }

    public static function searchAllApps($childName, $field){

        $guess = "%".$childName."%";

        if($field = "surname"){

        $applications = DB::select('SELECT applications.id AS id ,surname, denoted_name FROM applications INNER JOIN children ON applications.child_id = children.id where surname LIKE ? LIMIT 10', [$guess]);

        return $applications;

        }

        elseif($field = "denoted_name"){

            $applications = DB::select('SELECT initials, surname,denoted_name, total_marks FROM applications INNER JOIN children ON applications.child_id = children.id where denoted_name LIKE ? LIMIT 10', [$guess]);

        return $applications;
        }
    
    }
}
