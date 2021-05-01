<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table='test';

    protected  $fillable=['test_title','general_instuctions','free','question_marks','total_marks','total_questions','language','Goal_id','course_id','subCourse_id','teacher_id','time','Negative_marks','Eng_Question','Eng_Options_1','Eng_Options_2','Eng_Options_3','Eng_Options_4','Eng_Que_Url','Correct_Ans','Mar_Question','Mar_Options_1','Mar_Options_2','Mar_Options_3','Mar_Options_4','Mar_Que_Url'];

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
