<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class PastPupil extends Model
{
    public function addPupil($nic, $name){
    	DB::insert('insert into past_pupils (nic, name_with_initials) values (?, ?)', [$nic, $name]);
    }
}
