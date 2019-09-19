<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    function session()
    	{
    		return $this->hasMany("App\Session");
    	}
    	
    function payments(){
        return $this->hasMany('App\Payments');
    }

     function Payment_Professor(){
        return $this->hasMany('App\Payment_Professor');
    }
}
