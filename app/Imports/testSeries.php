<?php

namespace App\Imports;

use App\test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class testSeries implements ToModel,WithHeadingRow
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
        //dd($row['questions']);
        return new test([
            'Goal_id'   => $this->goal,
            'course_id'   => $this->course,
            'subCourse_id'   => $this->subcourse,
            'Negative_marks'   => $this->negative_marks,
            'time'   => $this->time,
            'Questions'    => $row['questions'],
            'Option1'    => $row['option1'],
            'Option2'    => $row['option2'],
            'Option3'    => $row['option3'],
            'Option4'    => $row['option4'],
            'Correct_option'    => $row['correct_option'],
        ]);
    }
}
