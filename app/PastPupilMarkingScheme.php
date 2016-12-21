<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PastPupilMarkingScheme extends Model
{
    //
       function addMarkingScheme( $req){

   		$name = $req['pastPupilSchemeName'];
   		$edu_mult = $req['edu_mul'];
   		$co_curr_mult = $req['co_curr_mul'];
   		$ex_curr_mult = $req['ex_curr_mul'];
   		$years_mult = $req['years_mult'];
   		DB::update('update past_pupil_marking_schemes set active=0');
   		DB::insert('insert into past_pupil_marking_schemes (name,edu_mult,co_curr_mult,ex_curr_mult,years_mult,active) values(?,?,?,?,?,1)',[$name,$edu_mult,$co_curr_mult,$ex_curr_mult,$years_mult]);
   }
}
