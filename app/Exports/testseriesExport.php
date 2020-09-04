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
            'Questions',
            'Option1',
            'Option2',
            'Option3',
            'Option4',
            'Correct_option',
            
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
