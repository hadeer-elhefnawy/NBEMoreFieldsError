<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','role_function_report','main_menu_report','sub_menu1_report','sub_menu2_report','report_description','print_report','generate_report'];

    public $table = "reports";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }

    public function FcFunctionDescription()
    {
        return $this->belongsTo(FcFunctionDescription::class,"fc_function");
    }

}
