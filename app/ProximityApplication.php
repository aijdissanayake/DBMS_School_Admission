<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProximityApplication extends Model
{
	public static function findApplication($app_id){
		$success = DB::select("SELECT * FROM all_proximity_application_details WHERE application_id=?",[$app_id]);

		if ($success){
			return $success[0];
		} else{
			return false;
		}
	}

	public static function createPxApplication($application_id, $no_er_years, $no_schools_nearby, $distance){
		$success = DB::insert("INSERT INTO proximity_applications (application_id, no_er_years, no_schools_nearby, distance) VALUES(?,?,?,?)", [$application_id, $no_er_years, $no_schools_nearby, $distance]);

		if ($success){
			$px_app_id = DB::select('SELECT LAST_INSERT_ID() as px_app_ID');
			return $px_app_id[0]->px_app_ID;

		}
		else{
			return false;
		}
	}

}
