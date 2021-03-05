<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class free_video extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class, 'course_id');
    }

    public function subcourse()
    {
        return $this->belongsTo(subcourses::class, 'subcourse_id');
    }
}
