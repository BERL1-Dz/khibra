<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     function user(){

        if(!empty($this->user_id))
        {
            if($this->type)
                return $this->belongsTo('App\Student',"user_id");
            else
                return $this->belongsTo('App\Professor',"user_id");

        }

    }
}
