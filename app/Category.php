<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function formations()
    	{
    		return $this->hasMany('App\Formation');
    	}

    protected $fillable =['name','description'];
}
