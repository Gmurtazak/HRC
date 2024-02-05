<?php

namespace App\Imports;

use App\Models\Attendance;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
            'name'     => $row[0],
            'checkin'    => $row[1],
            'checkout' => $row[2],
            'total_working_hours' => $row[3]
        ]);
    }
}
