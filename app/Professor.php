<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    function session()
    	{
    		return $this->hasMany("App\Professor");
    	}
}
