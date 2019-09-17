<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
	function presence(){
		return $this->hasMany('App\Presence');
	}

	function classroom(){
		return $this->belongsTo("App\Classroom","classroom_id");
	}

	function session(){
        return $this->belongsTo("App\Session","session_id");
    }
    
}
