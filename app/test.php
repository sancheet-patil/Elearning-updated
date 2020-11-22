<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
   protected $table='test';
    protected  $fillable=['Goal_id','course_id','subCourse_id','teacher_id','time','Negative_marks','Questions','Option1','Option2','Option3','Option4','Marathi_Question','Marathi_Option1','Marathi_Option2','Marathi_Option3','Marathi_Option4','Correct_option'];

    public function goals()
    {
        return $this->belongsTo(goals::class,'Goal_id');
    }

    public function teachers()
    {
        return $this->belongTo(Teacher::class,'teacher_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }

    public function subcourses()
    {
        return $this->belongTo(subcourses::class,'subCourse_id');
    }

    
}
