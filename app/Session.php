<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

     function seances(){
        return $this->hasMany('App\Seance');
    }

    function Professor()
    	{
    		return $this->belongsTo("App\Professor","prof_id");
    	}

    function Formation()
    	{
    		return $this->belongsTo("App\Formation","formation_id");
    	}
    	
}
