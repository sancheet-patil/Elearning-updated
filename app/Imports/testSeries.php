<?php

namespace App\Imports;

use App\test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class testSeries implements ToModel, WithHeadingRow
{
    public  $name, 
            $goal, 
            $course, 
            $subcourse, 
            $language, 
            $total_questions, 
            $negative_marks,
            $total_marks,  
            $question_marks,
            $free,
            $time, 
            $general_instuctions, 
            $teacher_id;

    public function __construct(
        $name, 
        $goal, 
        $course, 
        $subcourse, 
        $language, 
        $total_questions,
        $negative_marks,
        $total_marks, 
        $question_marks, 
        $free, 
        $time, 
        $general_instuctions, 
        $teacher_id)
    {
        $this->name = $name;
        $this->goal = $goal;
        $this->course = $course;
        $this->subcourse = $subcourse;
        $this->language = $language;
        $this->total_questions = $total_questions;
        $this->negative_marks = $negative_marks;
        $this->total_marks  = $total_marks ;
        $this->question_marks = $question_marks; 
        $this->free = $free; 
        $this->time = $time;
        $this->general_instuctions = $general_instuctions ;
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
            'test_title' => $this->name,
            'Goal_id' => $this->goal,
            'course_id' => $this->course,
            'subCourse_id' => $this->subcourse,
            'language' => $this->language,
            'total_questions' => $this->total_questions,
            'Negative_marks' => $this->negative_marks,
            'total_marks' => $this->total_marks,
            'question_marks' => $this->question_marks,
            'free' => $this->free,
            'time' => $this->time,
            'general_instuctions ' => $this->general_instuctions,
            'teacher_id' => $this->teacher_id,
            'Eng_Question' => $row['eng_question'],	
            'Eng_Options_1' => $row['eng_options_1'] ,	
            'Eng_Options_2' => $row['eng_options_2'] ,	
            'Eng_Options_3' => $row['eng_options_3'] ,	
            'Eng_Options_4' => $row['eng_options_4'],	
            'Eng_Que_Url' => $row['eng_que_url'],	
            'Correct_Ans' => $row['correct_ans'],	
            'Mar_Question' => $row['mar_question'],	
            'Mar_Options_1' => $row['mar_options_1'],	
            'Mar_Options_2' => $row['mar_options_2'],	
            'Mar_Options_3' => $row['mar_options_3'],	
            'Mar_Options_4' => $row['mar_options_4'],	
            'Mar_Que_Url' => $row['mar_que_url'],
        ]);
    }
}
