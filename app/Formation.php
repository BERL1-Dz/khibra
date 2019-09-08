<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    function category()
    	{
    		return $this->belongsTo("App\Category");
    	}
    protected $fillable =['name','price','durations','category_id'];
}
