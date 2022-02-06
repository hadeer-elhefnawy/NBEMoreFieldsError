<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable = ['role_id'
    ,'fc_function','role_function','main_menu','sub_menu1',
    'sub_menu2','maint_description', 'new', 'copy', 'delete', 'close', 'unlock', 'reopen', 'print', 
    'auth', 'reverse', 'rollover', 'confirm', 'liquidate', 'hold', 'template', 'view'
];

    public $table = "maintenance";

    public function NewAccessMatrix()
    {
        return $this->belongsTo(Fcaccessmatrix::class,"role_id");
    }

    public function FcFunctionDescription()
    {
        return $this->belongsTo(FcFunctionDescription::class,"fc_function");
    }
}
