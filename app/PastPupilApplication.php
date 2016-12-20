<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PastPupilApplication extends Model
{
    public static function createPPApplication($application_id, $pp_name, $pp_name_initials, $nic){
    	$success = DB::insert("INSERT INTO past_pupil_applications (application_id, pp_name, p_name_initials, nic) VALUES(?,?,?,?)", [$application_id, $pp_name, $pp_name_initials, $nic]);

    	if ($success){
    		$pp_app_id = DB::select('SELECT LAST_INSERT_ID() as pp_app_ID');
    		return $pp_app_id[0]->pp_app_ID;

    	}
    	else{
    		return false;
    	}
    }

public static function findApplication($pp_app_id){
	$success = DB::select("SELECT * FROM past_pupil_applications WHERE id=?",[$pp_app_id]);

	if ($success){
		return $success[0];
	} else{
		return false;
	}
}

}
