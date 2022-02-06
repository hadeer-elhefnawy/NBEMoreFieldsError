<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebBranch extends Model
{
    use HasFactory;
    protected $fillable = ['role_id','role_function_web_branch','main_menu_web_branch',
    'sub_menu1_web_branch','sub_menu2_web_branch','web_branch_description',
  
];

    public $table = "web_branch";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }
}
