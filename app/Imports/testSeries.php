<?php

namespace App\Imports;

use App\test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class testSeries implements ToModel, WithHeadingRow
{
    public $name, $goal, $course, $subcourse, $negative_marks, $time, $teacher_id;

    public function __construct($name, $goal, $course, $subcourse, $negative_marks, $time, $teacher_id)
    {
        $this->name = $name;
        $this->goal = $goal;
        $this->course = $course;
        $this->subcourse = $subcourse;
        $this->negative_marks = $negative_marks;
        $this->time = $time;
        $this->teacher_id = $teacher_id;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new test([
            'name' => $this->name,
            'Goal_id' => $this->goal,
            'course_id' => $this->course,
            'subCourse_id' => $this->subcourse,
            'Negative_marks' => $this->negative_marks,
            'time' => $this->time,
            'teacher_id' => $this->teacher_id,
            'Questions' => $row['questions'],
            'Option1' => $row['option1'],
            'Option2' => $row['option2'],
            'Option3' => $row['option3'],
            'Option4' => $row['option4'],
            'Marathi_Question' => $row['marathi_question'],
            'Marathi_Option1' => $row['marathi_option1'],
            'Marathi_Option2' => $row['marathi_option2'],
            'Marathi_Option3' => $row['marathi_option3'],
            'Marathi_Option4' => $row['marathi_option4'],
            'Correct_option' => $row['correct_option'],
        ]);
    }
}
