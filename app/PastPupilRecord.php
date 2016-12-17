<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PastPupilRecord extends Model
{
    public function addRecord($nic, $regNum, $years, $eduLevel, $coCurLevel, $exCurLevel) {
    	DB::insert('INSERT INTO past_pupil_records (nic, school_reg_no, no_years, edu_level, co_curr_level, ex_curr_level) VALUES (?, ?, ?, ?, ?, ?)', [$nic, $regNum, $years, $eduLevel, $coCurLevel, $exCurLevel]);
    }
}
