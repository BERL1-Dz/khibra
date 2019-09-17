<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    function seance(){
    	return $this->belongsTo('App\Seance',"seance_id");
    }
    function student(){
    	return $this->belongsTo('App\Student',"student_id");
    }
}
