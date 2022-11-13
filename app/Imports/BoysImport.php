<?php

namespace App\Imports;

use App\Models\Boys;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BoysImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Boys([
            'Index_Number' => $row['Index_Number'],
            'Name' => $row['Name'],
            'Academic_year' => $row['Academic_year'],
        ]);
    }
}
