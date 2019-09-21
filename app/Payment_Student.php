<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Student extends Model
{
     function Payment(){
    	return $this->belongsTo("App\Payment");
    }

     function Formation(){
    	return $this->belongsTo("App\Formation","formation_id");
    }

    function Student(){
    	return $this->belongsTo("App\Student","student_id");
    }
}
