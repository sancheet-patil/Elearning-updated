<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class syllabus extends Model
{
    protected $table = "syllabus";

    protected $fillable =['course_id','chapterName','subCourse_id'];
}
