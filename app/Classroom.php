<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    function seances(){
    	return $this->hasMany('App\Seance');
    }
}
