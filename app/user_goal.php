<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_goal extends Model
{
    protected $table = "user_goal";

    protected $fillable = ['goal_id'];

    public function goals()
    {
        return $this->belongsTo(goals::class,'goal_id');
    }
}
