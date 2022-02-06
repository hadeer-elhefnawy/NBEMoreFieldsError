<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessStageRights extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','role_function_Process_stage','main_menu_Process_stage',
    'sub_menu1_Process_stage','sub_menu2_Process_stage','Process_stage_description','editable',
  
];

    public $table = "process_stage_rights";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
