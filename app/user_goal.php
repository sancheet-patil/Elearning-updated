<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_goal extends Model
{
    //
    protected $table = "user_goal";
    public function goal()
    {
        return $this->belongTo(goal::class,'goal_id');
    }
}
