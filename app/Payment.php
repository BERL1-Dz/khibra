<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    function Payment_Professor(){
    	return $this->hasMany("App\Payment_Professor","professor_id");
    }

    function Professor(){
    	return $this->belongsTo("App\Professor","professor_id");
    }
}
