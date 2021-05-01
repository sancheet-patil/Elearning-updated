<?php

namespace App\Exports;

use App\test;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class testseriesExport implements WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //public function collection()
    //{
        //return test::all();
    //}

    public function headings(): array
    {
        return [
            'Eng Question',	
            'Eng Options_1',	
            'Eng Options_2',	
            'Eng Options_3',	
            'Eng Options_4',	
            'Eng Que Url',	
            'Correct Ans',	
            'Mar Question',	
            'Mar Options_1',	
            'Mar Options_2',	
            'Mar Options_3',	
            'Mar Options_4',	
            'Mar Que Url'
        ];
    }

    public function map($test): array
    {
        return [
            $test->id,
            $test->Goal_id,
            $test->course_id,
            $test->subCourse_id,
            $test->time,
            $test->Negative_marks,
            $test->Questions,
            $test->Option1,
            $test->Option2,
            $test->Option3,
            $test->Option4,
            $test->Correct_option,
            Date::dateTimeToExcel($test->created_at),
            Date::dateTimeToExcel($test->updated_at),
        ];
    }
}
