<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Professor extends Model
{
    function Payment(){
    	return $this->belongsTo("App\Payment");
    }
    function Professor(){
    	return $this->belongsTo("App\Professor","professor_id");
    }

    function formation(){
    	return $this->belongsTo("App\Formation","formation_id");
    }
}
