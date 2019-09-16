<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    function category()
    	{
    		return $this->belongsTo("App\Category","category_id");
    	}
    protected $fillable =['name','price','durations','category_id'];

    function session()
    	{
    		return $this->hasMany("App\Session");
    	}
}
