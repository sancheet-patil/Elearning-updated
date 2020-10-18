<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class previous_papers extends Model
{
	 protected $table='previous_papers';
    protected  $fillable=['Year','Name','Subject','Question','Option1','Option2','Option3','Option4','Answer'];

    //
    public function goals()
    {
        return $this->belongsTo(goals::class,'goal_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }

    public function subcourses()
    {
        return $this->belongTo(subcourses::class,'subcourse_id');
    }
}
