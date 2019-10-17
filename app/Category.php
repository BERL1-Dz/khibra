<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public static function boot() {
    parent::boot();
    
    static::deleting(function($category) {
             $category->formations()->delete();
        });
    }

    function formations()
    	{
    		return $this->hasMany('App\Formation');
    	}

    protected $fillable =['name','description'];

}

