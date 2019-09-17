<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Professor extends Model
{
    function Payment(){
    	return $this->belongsTo("App\Payment");
    }
}
