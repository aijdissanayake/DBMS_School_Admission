<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProximityApplication extends Model
{
	public static function findApplication($px_app_id){
		$success = DB::select("SELECT * FROM proximity_applications WHERE id=?",[$px_app_id]);

		if ($success){
			return $success[0];
		} else{
			return false;
		}
	}

	public static function createPxApplication($application_id, $no_er_years, $no_schools_nearby, $distance){
		$success = DB::insert("INSERT INTO proximity_applications (application_id, no_er_years, no_schools_nearby, distance) VALUES(?,?,?,?)", [$application_id, $no_er_years, $no_schools_nearby, $distance]);

		if ($success){
			$pp_app_id = DB::select('SELECT LAST_INSERT_ID() as pp_app_ID');
			return $pp_app_id[0]->pp_app_ID;

		}
		else{
			return false;
		}
	}

}
