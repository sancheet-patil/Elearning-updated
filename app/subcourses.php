<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcourses extends Model
{
    public function goals()
    {
        return $this->belongsTo(goals::class,'goal_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }

    public function livestream()
    {
        return $this->hasMany(livestream::class,'subcourse_id');
    }
}
