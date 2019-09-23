<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    function User(){
     return $this->belongsTo("App\User","user_id");
    }
}
