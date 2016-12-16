<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProximityMarkingScheme extends Model
{
    
    function addMarkingScheme( $req){

   		$name = $req['proximitySchemeName'];
   		$distance_mult = $req['distance_mul'];
   		$distance_factor = $req['distance_factor'];
   		$years_mult = $req['er_years'];
   		DB::insert('insert into proximity_marking_schemes (name,mult,near_fact,year_mult,active) values(?,?,?,?,1)',[$name,$distance_mult,$distance_factor,$years_mult]);
   }
}
