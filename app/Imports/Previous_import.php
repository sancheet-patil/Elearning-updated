<?php

namespace App\Imports;

use App\previous_papers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Previous_import implements ToModel,WithHeadingRow
{
     public $year,$goal,$course,$subcourse;

    function __construct($year,$goal,$course,$subcourse)
    {
        $this->year = $year;
        $this->goal = $goal;
        $this->course = $course;
        $this->subcourse = $subcourse;
        
    }
   
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new previous_papers([
            'Year'             => $this->year,
            'goal_id'          => $this->goal,
            'subcourse_id'     => $this->subcourse,
            'course_id'        => $this->course,
            'Question'         => $row['question'],
            'Option1'          => $row['option1'],
            'Option2'          => $row['option2'],
            'Option3'          => $row['option3'],
            'Option4'          => $row['option4'],
            'Answer'           => $row['answer'],

            //
        ]);
    }
}
