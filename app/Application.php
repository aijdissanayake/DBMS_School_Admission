<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function createApplication() {
    	DB::insert('INSERT INTO applications (year, child_id, applicant_id, school_reg_no, pref_1, pref_2, pref_3, pref_4, pref_5, pref_6, category_id, total_marks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$nic, $regNum, $years, $eduLevel, $coCurLevel, $exCurLevel]);
    }
}
