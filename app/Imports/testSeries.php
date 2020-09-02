<?php

namespace App\Imports;

use App\test;
use Maatwebsite\Excel\Concerns\ToModel;

class testSeries implements ToModel
{
    public $goal,$course,$subcourse,$negative_marks,$time;

    function __construct($goal,$course,$subcourse,$negative_marks,$time)
    {
        $this->goal = $goal;
        $this->course = $course;
        $this->subcourse = $subcourse;
        $this->negative_marks = $negative_marks;
        $this->time = $time;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new test([
            'Goal_id'   => $this->goal,
            'course_id'   => $this->course,
            'subCourse_id'   => $this->subcourse,
            'Negative_marks'   => $this->negative_marks,
            'time'   => $this->time,
            'Questions'    => $row[0],
            'Option1'    => $row[1],
            'Option2'    => $row[2],
            'Option3'    => $row[3],
            'Option4'    => $row[4],
            'Correct_option'    => $row[5],
        ]);
    }
}
