<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relationship to user
    public function user() {
        return $this->belongsToMany('App/User');
    }
}
