<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    function Professor()
    	{
    		return $this->belongsTo("App\Professor");
    	}

    function Formation()
    	{
    		return $this->belongsTo("App\Formation");
    	}
    	

  
}
