<?php

namespace App\Imports;

use App\Models\Maintenance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MaintenanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Maintenance([
            //
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'password' => \Hash::make($row['password']),
        ]);
    }
    
}
