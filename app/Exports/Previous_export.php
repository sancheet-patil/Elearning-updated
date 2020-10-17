<?php

namespace App\Exports;

use App\previous_papers;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class Previous_export implements WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Name',
            'Subject',
            'Question',
            'Option1',
            'Option2',
            'Option3',
            'Option4',
            'Answer',
            ];
    }
    public function map($previous_papers): array
    {
        return [
            $previous_papers->id,
             $previous_papers->Year,
            $previous_papers->Name,
            $previous_papers->Subject,
            $previous_papers->Question,
            $previous_papers->Option1,
            $previous_papers->Option2,
            $previous_papers->Option3,
            $previous_papers->Option4,
            $previous_papers->Answer,
            Date::dateTimeToExcel($previous_papers->created_at),
            Date::dateTimeToExcel($previous_papers->updated_at),
        ];
    }
}
