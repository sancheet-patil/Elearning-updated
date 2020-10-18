<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    //
    public function course()
    {
        return $this->hasMany(course::class,'id');
    }
    
    public function livestream()
    {
        return $this->hasMany(livestream::class,'id');
    }

    public function user_goal()
    {
        return $this->hasMany(user_goal::class,'id');
    }

    public function homeVideo()
    {
        return $this->hasMany(homeVideo::class,'id');
    }
}
