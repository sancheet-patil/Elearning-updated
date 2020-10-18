<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeVideo extends Model
{
    //
    
    public function goals()
    {
        return $this->belongsTo(goals::class,'goal_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }

    public function subcourse()
    {
        return $this->belongsTo(subcourses::class,'subcourse_id');
    }

}
