<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	 function presences(){
        return $this->hasMany('App\Presence');
    }

    function payments(){
        return $this->hasMany('App\Payments');
    }

}
