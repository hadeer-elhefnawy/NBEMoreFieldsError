<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FcFunctionDescription extends Model
{
    use HasFactory;

    protected $fillable = ['FUNCTION_ID','MAIN_MENU','SUB_MENU_1','SUB_MENU_2','DESCRIPTION'

];

    public $table = "fc_function_description";


    public function maintenancesFunc()
    {
        return $this->hasMany(Maintenance::class,"fc_function");
    }

    public function reportsFunc()
    {
        return $this->hasMany(Reports::class,"fc_function");
    }
}
