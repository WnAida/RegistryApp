<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Row;

class StudentImport implements WithHeadingRow,OnEachRow, WithUpserts
{
    public function onRow(Row $r)
    {
        $r = $r->toArray();

        Student::updateOrInsert(
            [
                'email'    => $r['email'],
            ],
            [
                'name'     => $r['name'],
                'email'    => $r['email'],
                'address'    => $r['address'],
                'course'    => $r['course'],

            ]
        );
    }

    public function uniqueBy()
    {
        return  'email';
    }
}
