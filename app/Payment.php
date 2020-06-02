<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    function Payment_Professor(){
    	return $this->hasMany("App\Payment_Professor","professor_id");
    }

    function Payment_Student(){
    	return $this->hasMany("App\Payment_Student","student_id");
    }

    function Professor(){
    	return $this->belongsTo("App\Professor","professor_id");
    }

    function Student(){
    	return $this->belongsTo("App\Student","student_id");
    }
}
