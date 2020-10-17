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
        return $this->hasMany(livestream::class,'id');
    }

    public function previous_year()
    {
        return $this->hasMany(previous_papers::class,'id');   
    }

    public function testSeries()
    {
        return $this->hasMany(test::class,'id');
    }

    public function homeVideo()
    {
        return $this->hasMany(homeVideo::class,'id');
    }
}
