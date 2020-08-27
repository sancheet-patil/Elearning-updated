<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
   protected $table='test';
    protected  $fillable=['Goal_id','course_id','subCourse_id','time','Negative_marks','Questions','Option1','Option2','Option3','Option4','Correct_option'];

}
