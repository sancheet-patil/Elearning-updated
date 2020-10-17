<?php

namespace App\Imports;

use App\previous_papers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Previous_import implements ToModel,WithHeadingRow
{
     public $year;

    function __construct($year)
    {
        $this->year = $year;
        
    }
   
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new previous_papers([
            'Year'   => $this->year,
            'Name'    => $row['name'],
            'Subject'  => $row['subject'],
            'Question'    => $row['question'],
            'Option1'    => $row['option1'],
            'Option2'    => $row['option2'],
            'Option3'    => $row['option3'],
            'Option4'    => $row['option4'],
            'Answer'    => $row['answer'],

            //
        ]);
    }
}
